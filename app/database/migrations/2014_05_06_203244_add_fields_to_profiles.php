<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToProfiles extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('profiles', function(Blueprint $table)
		{
            $table->integer('dob_day')->nullable();
            $table->integer('dob_month')->nullable();
            $table->integer('dob_year')->nullable();

            $table->string('aim_address')->nullable();
            $table->string('msn_address')->nullable();  
            $table->string('web_address')->nullable();  
            $table->string('icq_address')->nullable();  
            $table->string('yahoo_address')->nullable();  
            $table->string('jabber_address')->nullable();

            $table->string('gender');
            $table->text('interest')->nullable();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('profiles', function(Blueprint $table)
		{
			$table->dropColumn('dob_day');
            $table->dropColumn('dob_month');
            $table->dropColumn('dob_year');

            $table->dropColumn('aim_address');
            $table->dropColumn('msn_address');  
            $table->dropColumn('web_address');  
            $table->dropColumn('icq_address');  
            $table->dropColumn('yahoo_address');  
            $table->dropColumn('jabber_address');

            $table->dropColumn('gender');
            $table->dropColumn('interest');
		});
	}

}
