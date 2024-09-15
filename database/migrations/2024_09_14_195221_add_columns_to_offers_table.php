<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToOffersTable extends Migration
{
    /**  
     * Run the migrations.  
     *  
     * @return void  
     */
    public function up()
    {
        Schema::table('offers', function (Blueprint $table) {
            $table->string('nationality')->nullable(); // Nullable if it can be empty  
            $table->string('border_number')->nullable();
            $table->date('visa_expaire_date')->nullable();
            $table->string('visa_type')->default('Multi');
            $table->string('visit_type')->default('Traffic');
            $table->string('email')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('city')->nullable();
            $table->integer('renewal_period')->nullable(); // Assuming renewal period is an integer (e.g. months)  
            $table->string('mail_box')->nullable();
            $table->string('post_code')->nullable();
            $table->integer('visa_beneficiaries_num')->max(10)->default(1);
            $table->enum('document_status', ['active', 'inactive'])->default('inactive');
            $table->enum('guarantee_board_status', ['Acceptable', 'Rejected' , 'Pending'])->default('Pending');
            $table->text('address')->nullable(); // Assuming address may need more space than a string  
            $table->string('total_price')->nullable();
        });
    }

    /**  
     * Reverse the migrations.  
     *  
     * @return void  
     */
    public function down()
    {
        Schema::table('offers', function (Blueprint $table) {
            $table->dropColumn([
                'nationality',
                'border_number',
                'visa_expaire_date',
                'email',
                'marital_status',
                'city',
                'renewal_period',
                'mail_box',
                'post_code',
                'address',
            ]);
        });
    }
}
