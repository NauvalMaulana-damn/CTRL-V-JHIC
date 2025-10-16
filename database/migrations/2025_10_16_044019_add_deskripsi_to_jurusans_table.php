    <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        return new class extends Migration
        {
            /**
             * Run the migrations.
             */
            public function up(): void
            {
                Schema::table('jurusans', function (Blueprint $table) {
                    if (! Schema::hasColumn('jurusans', 'deskripsi')) {
                        $table->text('deskripsi')->after('departemen');
                    }
                });
            }

            public function down(): void
            {
                Schema::table('jurusans', function (Blueprint $table) {
                    $table->dropColumn('deskripsi');
                });
            }

    };
