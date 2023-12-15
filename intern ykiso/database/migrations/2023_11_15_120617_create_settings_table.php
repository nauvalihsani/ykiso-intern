<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Setting; // Add this line to import the Setting model

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            // $table->timestamps(); // Optional, only if you need timestamps
        });

        Setting::create([
            'key' => '_site_name',
            'label' => 'Judul Situs',
            'value' => 'Website sederhana',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => '_office_address',
            'label' => 'Alamat Kantor',
            'value' => 'Sleman, Yogyakarta, Indonesia',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => '_instagram',
            'label' => 'Instagram',
            'value' => 'https://instagram.com/@nauvalihsani_',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => '_tiktok',
            'label' => 'Tiktok',
            'value' => 'https://www.tiktok.com/@nauvalihsani_',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => '_site_description',
            'label' => 'Site Description',
            'value' => 'Website sederhana, dengan admin filament, untuk hidup sederhana',
            'type' => 'text',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
