<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            // 0 = usuario | 1 = admin
            $table->boolean('role')->default(0);
            $table->boolean('status')->default(1);
            $table->timestamps();
        });

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'role' => 1,
            'status' => 1
        ], [
            'name' => 'JoaoSilva',
            'email' => 'joao.silva@example.com',
            'password' => Hash::make('senha123'),
            'role' => 0,
            'status' => 1
        ],
        [
            'name' => 'MariaPereira',
            'email' => 'maria.pereira@example.com',
            'password' => Hash::make('senha456'),
            'role' => 0,
            'status' => 1
        ],
        [
            'name' => 'PedroSantos',
            'email' => 'pedro.santos@example.com',
            'password' => Hash::make('senha789'),
            'role' => 0,
            'status' => 0
        ],
        [
            'name' => 'AnaOliveira',
            'email' => 'ana.oliveira@example.com',
            'password' => Hash::make('senhaABC'),
            'role' => 0,
            'status' => 0
        ],
        [
            'name' => 'CarlosCosta',
            'email' => 'carlos.costa@example.com',
            'password' => Hash::make('senhaXYZ'),
            'role' => 0,
            'status' => 1
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
