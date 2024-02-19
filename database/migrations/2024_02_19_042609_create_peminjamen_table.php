<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id('id_peminjaman');
            $table->foreignId('id_user');
            $table->foreignId('id_buku');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
            $table->enum('status', ['0', '1']);
            $table->integer('jumlah');
            $table->timestamps();
        });
        DB::unprepared('
        CREATE TRIGGER min_stock 
        AFTER INSERT ON peminjaman
        FOR EACH ROW 
        BEGIN
        IF NEW.status = "0" THEN 
        UPDATE buku SET stok = stok - NEW.jumlah WHERE id_buku = NEW.id_buku
        ');
        DB::unprepared('
        CREATE TRIGGER max_stock 
        AFTER UPDATE ON peminjaman
        FOR EACH ROW 
        BEGIN
        IF NEW.status = "1" THEN 
        UPDATE buku SET stok = stok + NEW.jumlah WHERE id_buku = NEW.id_buku
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
