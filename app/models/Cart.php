<?php


namespace app\models;


class Cart extends AppModel
{

    public function addToCart($product, $qty = 1, $mod =[])
    {
        $ID = "{$product->id}";
        $title = "{$product->title}";
        $MODS = "";
        $price = $product->price;
        $IMG = "{$product->image}";
        if (!empty($mod)) {
            foreach ($mod as $m) {
                $MODS .= "," . $m->id;
                $price += $m->price;
            }
        }
        if (isset($_SESSION['cart'][$ID . $MODS])) {
            $_SESSION['cart'][$ID . $MODS]['qty'] += $qty;
        } else {
            $_SESSION['cart'][$ID . $MODS] = [
                'qty' => $qty,
                'mod' => $MODS,
                'price' => $price,
                'title' => $title,
                'img' => $IMG,
                'alias' => $product->alias
            ];


        }
        $_SESSION['cart.qty'] = isset($_SESSION['cart.qty']) ? $_SESSION['cart.qty'] + $qty : $qty;
        $_SESSION['cart.sum'] = isset($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + $qty * $price : $qty * $price;




    }

    public function deleteItem($id){

        $qtyMinus = $_SESSION['cart'][$id]['qty'];
        $sumMinus = $_SESSION['cart'][$id]['price']*$qtyMinus;
        $_SESSION['cart.qty'] -= $qtyMinus;
        $_SESSION['cart.sum'] -= $sumMinus;
        unset($_SESSION['cart'][$id]);
        if (empty($_SESSION['cart'])){
            session_destroy();
        }

    }

    public function incrementItem($id){

      $price = $_SESSION['cart'][$id]['price'];
      $_SESSION['cart'][$id]['qty'] +=1;
      $_SESSION['cart.qty'] +=1;
      $_SESSION['cart.sum'] += $price;

    }

    public function decrementItem($id){
        if ($_SESSION['cart'][$id]['qty'] <=1){
            $this->deleteItem($id);
        }else {
            $price = $_SESSION['cart'][$id]['price'];
            $_SESSION['cart'][$id]['qty'] -= 1;
            $_SESSION['cart.qty'] -= 1;
            $_SESSION['cart.sum'] -= $price;
        }
    }



}