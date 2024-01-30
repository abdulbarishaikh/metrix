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
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('number');
            $table->string('organization_name',200);
            $table->string('website',200);
            $table->string('primary_technology',200);
            $table->string('technology2',200);
            $table->string('technology3',200);
            $table->enum('global_locaton',['india_only','outside_india_only','india_onsite']);
            $table->text('onsite_location1');
            $table->text('onsite_location2');
            $table->text('india_location1');
            $table->text('india_location2');
            $table->text('services');
            $table->text('primary_services');
            $table->enum('staff_augmentation',['Yes','No']);
            $table->unsignedInteger('monthly_budget')->nullable();
            $table->enum('nda_document',['fully_signed','submitted','recieved_partner_signed_copy','shared_matrixOne_signed']);
            $table->string('contact1',100);
            $table->string('first_name',100);
            $table->string('last_name',100);
            $table->string('designation',150);
            $table->string('email_id',150);
            $table->string('mobile_number',100);
            $table->text('location');
            $table->string('contact2',100);
            $table->string('first_name2',100);
            $table->string('last_name2',100);
            $table->string('designation2',150);
            $table->string('email_id2',150);
            $table->string('mobile_number2',100);
            $table->text('location2');
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
        Schema::dropIfExists('partners');
    }
};
