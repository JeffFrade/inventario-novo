<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipments', function (Blueprint $table) {
            $table->id();
            $table->string('serial_number', 100);
            $table->string('barcode', 50);
            $table->string('item', 200);
            $table->string('brand', 50);
            $table->string('model', 50);
            $table->string('cod_outsourcing', 50)->nullable();
            $table->text('obs')->nullable();
            $table->bigInteger('id_room')->unsigned();
            $table->bigInteger('id_responsible')->unsigned();
            $table->bigInteger('id_type')->unsigned();
            $table->text('image')->nullable();
            $table->text('attach')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_room')
                ->references('id')
                ->on('rooms')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('id_responsible')
                ->references('id')
                ->on('responsibles')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('id_type')
                ->references('id')
                ->on('equipments_types')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->index(['serial_number', 'barcode']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipments');
    }
}
