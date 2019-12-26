class Category extends Eloquent {

    public static function boot()
    {
        static::deleting(function()
        {
            foreach ($this->products as $product)
            {
                $product->deleteImage($product->id);
            }
        });
    }

}