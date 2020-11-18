<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBzPartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bz_parts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('class');
            $table->string('bcId');
            $table->string('apId');
            $table->string('bzPartType');
            $table->string('description');
            $table->string('partNumber');
            $table->string('serialNumber');
            $table->string('ucc_cid');
            $table->string('name');
            $table->string('issueDate');
            $table->string('issuedBy_BzContactId');
            $table->string('issuedBy_BzOrgId');
            $table->string('manufacturer_BzOrgId');
            $table->string('currentOwner_BzContactId');
            $table->string('currentOwner_BzOrgId');
            $table->string('bzAssetFamily');
            $table->string('make');
            $table->string('bzModel');
            $table->string('year');
            $table->string('bzPartLife');
            $table->string('operatingCycles');
            $table->string('repairable');
            $table->string('bzPartCondition');
            $table->string('bzPartCategory');
            $table->string('status');
            $table->string('active');
            $table->string('acquisitionCost');
            $table->string('supplier_BzOrgId');
            $table->string('bzLocation');
            $table->string('warrantyStatus');
            $table->string('insuranceStatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bz_parts');
    }
}
