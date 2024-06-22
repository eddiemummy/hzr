<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;

class ProductSegment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product-segment';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $segment = ["Öne çıkanlar", "Çok satanlar", "İndirimli"];

        \App\Models\ProductSegment::truncate();

        foreach ($segment as $item) {
            $products = Product::select("id")->where("segment", "like", "%" . $item . "%")->get();
            $idList = [];
            foreach ($products as $product) {
                $idList[] = $product->id;
            }

            $productSegment = new \App\Models\ProductSegment();
            $productSegment->products = implode(",", $idList);
            $productSegment->segment = $item;
            $productSegment->save();
        }
    }
}
