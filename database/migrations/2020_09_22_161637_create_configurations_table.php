<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configurations', function (Blueprint $table) {
            $table->id();
            $table->string('COINBASE_API_KEY');
            $table->string('COINBASE_WEBHOOK_SECRET');
            $table->string('PAYPAL_CLIENT_ID');
            $table->string('PAYPAL_CLIENT_SECRET');
            $table->string('IBAN');
            $table->string('CODE_SWIFT');
            $table->string('SMTP_EMAIL');
            $table->string('SMTP_PASSWORD');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('configuration');
    }
}
