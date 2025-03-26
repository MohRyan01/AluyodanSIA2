<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\HouseHolds;
use App\Models\Resident;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('house_holds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('HouseHoldname')->nullable();
            $table->string('member')->nullable();
            $table->string('address')->nullable();
            $table->string('PrimaryPhone')->nullable();
            $table->string('email')->nullable();
            $table->string('name')->nullable();
            $table->string('birthdates')->nullable();
            $table->string('Relationshiphead')->nullable();
            $table->string('PrimaryHousehold')->nullable();
            $table->unsignedBigInteger('Resident_id')->nullable();;
            $table->foreign('Resident_id')->references('id')->on('house_holds')->onDelete('cascade');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('house_holds');
    }
};
