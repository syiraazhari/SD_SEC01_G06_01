
# Setup
1. [Composer](https://getcomposer.org/download/)
2. [NodeJS](https://nodejs.org/en/download/)
3. [Xampp](https://www.apachefriends.org/download.html)
4. [VSCode](https://code.visualstudio.com/Download)

## Environment variables

- `.env` - Environment variables can be set in this file

***Note*** : You can quickly set the database information and other variables in this file and have the application fully working.


## Run Locally

Clone the project

```bash
  git clone https://github.com/syiraazhari/SD_SEC01_G06_01.git
```

Go to the project directory

```bash
  cd SD_SEC01_G06_01
```

Install all the dependencies using composer

```bash
  composer install
```

Copy the example env file and make the required configuration changes in the .env file

```bash
  cp .env.example .env
```

Generate a new application key

```bash
  php artisan key:generate
```

Run the database migrations (Set the database connection in .env before migrating)

```bash
  php artisan migrate
```

Start the local development server

```bash
  php artisan serve
```

You can now access the server at http://localhost:8000

**TL;DR command list**

```bash
  git clone https://github.com/syiraazhari/SD_SEC01_G06_01.git
  cd SD_SEC01_G06_01
  composer install
  cp .env.example .env
  php artisan key:generate
```

**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

```bash
  php artisan migrate
  php artisan serve
```

## Database seeding

**Populate the database with seed data with relationships which includes users, articles, comments, tags, favorites and follows. This can help you to quickly start testing the api or couple a frontend and start using it with ready content.**

Add new CategoryFactory.php

    database\factories\CategoryFactory.php

Set the property values as per your requirement

    $category_name = $this->faker->unique()->words($nb=2,$asText=true);
    $slug = Str::slug($category_name);
    return [
      'name' => $category_name,
      'slug' => $slug
    ];
Add new ProductFactory.php

    database\factories\ProductFactory.php

Set the property values as per your requirement

    $product_name = $this->faker->unique()->words($nb=2,$asText=true);
      $slug = Str::slug($product_name);
        return [
          'name' => $product_name,
          'slug' => $slug,
          'short_description' => $this->faker->text(200),
          'description' => $this->faker->text(500),
          'regular_price'=> $this->faker->numberBetween(10,500),
          'SKU' => 'DIGI'.$this->faker->unique()->numberBetween(100,500),
          'stock_status' => 'instock',
          'quantity' => $this->faker->numberBetween(100,200),
          'image' => 'digital_' . $this->faker->unique()->numberBetween(1,22).'.jpg',
          'category_id' => $this->faker->numberBetween(1,5),
        ];

Call the factories in database seeder

    database\seeders\DatabaseSeeder.php

Set the property values as per your requirement

    \App\Models\Category::factory(6)->create();
    \App\Models\Product::factory(22)->create();

Run the database seeder and you're done

    php artisan db:seed

***Note*** : It's recommended to have a clean database before seeding. You can refresh your migrations at any point to clean the database by running the following command

    php artisan migrate:refresh