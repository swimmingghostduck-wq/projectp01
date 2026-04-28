<?php

public function show()
{
    return view('list_product', [
        'id' => 1,
        'product' => 'Laptop'
    ]);
}
