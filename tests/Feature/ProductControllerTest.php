<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function testCreateProduct()
    {
        $this->followingRedirects();

        $response = $this->post(route('products.store'), [
            'name' => 'New Product',
            'size' => 'XXL',
            'price' => 1234,
            'weight' => 12345
        ]);

        $response->assertStatus(200);

        $this->assertDatabaseHas('products', [
            'name' => 'New Product',
            'size' => 'XXL',
            'price' => 1234,
            'weight' => 12345
        ]);
    }

    public function testUpdateProduct()
    {
        $this->followingRedirects();

        $product = Product::factory()->create([
            'name' => 'New Product',
            'size' => 'XXL',
            'price' => 1234,
            'weight' => 12345
        ]);

        $response = $this->put(route('products.update', $product));

        $response->assertStatus(200);

        $this->assertDatabaseHas('products', [
            'name' => 'New Product',
            'size' => 'XXL',
            'price' => 1234,
            'weight' => 12345
        ]);
    }

    public function testShowAllProducts()
    {
        $this->followingRedirects();

        Product::factory()->count(5)->create();

        $response = $this->get(route('products.index'));

        $response->assertStatus(200);

        $this->assertDatabaseCount('products', 5);
    }

    public function testShowProduct()
    {
        $this->followingRedirects();

        $product = Product::factory()->create([
            'name' => 'New Product',
            'size' => 'XXL',
            'price' => 1234,
            'weight' => 12345
        ]);

        $response = $this->get(route('products.show', $product));

        $response->assertStatus(200);

        $this->assertDatabaseHas('products', [
            'name' => 'New Product',
            'size' => 'XXL',
            'price' => 1234,
            'weight' => 12345
        ]);
    }

    public function testDeleteProduct()
    {
        $this->followingRedirects();

        $product = Product::factory()->create();

        $this->assertDatabaseHas('products', [
            'name' => $product->name,
            'size' => $product->size,
            'price' => $product->price,
            'weight' => $product->weight
        ]);

        $response = $this->delete(route('products.destroy', $product));

        $response->assertStatus(200);

        $this->assertDeleted('products', [
            'name' => $product->name,
            'size' => $product->size,
            'price' => $product->price,
            'weight' => $product->weight
        ]);
    }
}
