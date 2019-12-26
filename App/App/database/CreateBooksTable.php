

public function up()
{
    Schema::create('books', function (Blueprint $table) {
        ...
        $table->string('filename')->nullable();
        $table->string('mime')->nullable();
        $table->string('original_filename')->nullable();
        ...
    });
}