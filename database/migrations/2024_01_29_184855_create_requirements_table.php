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
        Schema::create('requirements', function (Blueprint $table) {
            $table->id();
            $table->string('title',200)->nullable();
            $table->mediumText('job_desc')->nullable();
            $table->string('experience_band',50)->nullable();
            $table->mediumText('location')->nullable();
            $table->enum('functiona_tec',['functional','technical','tech-functional'])->nullable();
            $table->unsignedInteger('monthly_budget')->nullable();
            $table->enum('type_oppurtunity',['full_time','c_to_c','c_to_h'])->nullable();
            $table->unsignedInteger('duration_month')->nullable();
            $table->mediumText('remark')->nullable();
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
        Schema::dropIfExists('requirenments');
    }
};
