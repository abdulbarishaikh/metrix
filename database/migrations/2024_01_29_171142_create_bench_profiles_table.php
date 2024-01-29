<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bench_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('platform_id')->nullable()
            ->constrained('platforms', 'id')
            ->onDelete('cascade');
            $table->foreignId('techonology_type_id')->nullable()
            ->constrained('technologies', 'id')
            ->onDelete('cascade');
            $table->enum('experience',['trained','junior_level','mid_level','senior','sme','architecs'])->nullable();
            $table->string('exp_band',50)->nullable();
            $table->enum('mode_delivery',['remote','onsite','hybrid'])->nullable();
            $table->string('current_location',200)->nullable();
            $table->string('preferred_location',200)->nullable();
            $table->string('skills',200)->nullable();
            $table->mediumText('professional_summary')->nullable();
            $table->unsignedInteger('status')->nullable()->default(1);
            $table->unsignedInteger('user_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bench_profiles');
    }
};
