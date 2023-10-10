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
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('account_id')->nullable();
            $table->string('from')->nullable();
            $table->decimal('amount', 11, 2)->default(0);
            $table->string('acct_number')->nullable();
            $table->string('recipient_name')->nullable();
            $table->string('account_type')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('note')->nullable();

            //benefactor
            $table->string('ben_name')->nullable();
            $table->string('ben_country')->nullable();
            $table->string('ben_city')->nullable();
            $table->string('ben_address')->nullable();
            $table->string('country')->nullable();

            $table->integer('status')->default(0)->nullable();
            $table->string('trans_type')->nullable();
            $table->string('swift_code')->nullable();

            // Transfer Code
            $table->string('first_code')->nullable();
            $table->string('admin_first_code')->nullable();
            $table->string('second_code')->nullable();
            $table->string('admin_second_code')->nullable();
            $table->string('third_code')->nullable();
            $table->string('admin_third_code')->nullable();


            $table->integer('internal_transfer')->default(0)->nullable();
            $table->integer('other_bank_transfer')->default(0)->nullable();
            $table->integer('wire_transfer')->default(0)->nullable();
            $table->boolean('credit_inflow')->default(false);
            $table->boolean('debit_inflow')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transfers');
    }
};
