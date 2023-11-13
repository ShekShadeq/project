<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string ('sender_name');
            $table->string ('sender_email')->unique();
            $table->string ('sender_contact');
            $table->text ('sender_address');

            $table->string ('receiver_name');
            $table->string ('receiver_email');
            $table->string ('receiver_contact');
            $table->text ('receiver_address');

            $table->integer ('quantity');
            $table->text ('description');
            $table->date ('date');
            $table->string ('Category_type');
            $table->integer ('weight_range');
            $table->integer ('price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
