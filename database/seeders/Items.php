<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Items extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = [
            ['name' => 'Paprika', 'price' => '50000', 'image' => 'storage/img/paprika.jpg', 'desc' => 'Capsicums are native to tropical America. They then spread to Europe but they have only been available in New Zealand for the past 30-40 years. Capsicums are seed pods. They can be red, green, yellow, orange, white, purple-brown and lime green.'],
            ['name' => 'Egg Plant', 'price' => '25000', 'image' => 'storage/img/eggplant.jpg', 'desc' => 'It is actually a fruit, and contains many fine seeds. It has a mild taste and is typically cooked with stronger flavours such as garlic, tomatoes, onions, herbs and spices.'],
            ['name' => 'Potato', 'price' => '15000', 'image' => 'storage/img/potato.jpg', 'desc' => 'Potatoes are swollen underground stems, called tubers. Like most common vegetables eaten today, potatoes came to New Zealand from Britain and by 1880 they were a staple part of the early settler(s) diet.'],
            ['name' => 'Melon', 'price' => '38000', 'image' => 'storage/img/melon.jpg', 'desc' => 'A soft peach-coloured flesh that has a distinctive aroma and sweet smooth musky flavour. Rockmelons are smaller than watermelons and have a coarsely netted skin.'],
            ['name' => 'Tomato', 'price' => '8000', 'image' => 'storage/img/tomato.jpg', 'desc' => 'Tomatoes are actually fruit but they are considered a vegetable because of their uses. They were known as pommes d amour by the French, or apples of love.'],
            ['name' => 'Shiitake Mushroom', 'price' => '5000', 'image' => 'storage/img/mushroom.jpg', 'desc' => 'These have a traditional mushroom shape with a dark brown cap, often with small speckles around the rim. Shiitake mushrooms have a distinctive fresh earthy flavour and aroma and are widely used in Asian cooking.'],
            ['name' => 'Lettuce', 'price' => '20000', 'image' => 'storage/img/lettuce.jpg', 'desc' => 'There are many lettuce varieties, with availability changing often. Head lettuces have firm, tightly packed heads with a central core or heart and crisp leaves.'],
            ['name' => 'Cabbage', 'price' => '12000', 'image' => 'storage/img/cabbage.jpg', 'desc' => 'These are the most widely grown cabbage and are available all year round with a range of varieties ensuring a continuous supply. Drumhead is a popular variety with smooth compact leaves. Savoy has crinkly leaves with very good flavour.'],
            ['name' => 'Apple', 'price' => '17000', 'image' => 'storage/img/apple.jpg', 'desc' => 'Apples are generally grown by grafting, although wild apples grow readily from seed. Apple trees are large if grown from seed, but small if grafted onto roots (rootstock).'],
            ['name' => 'Banana', 'price' => '40000', 'image' => 'storage/img/banana.jpg', 'desc' => 'A banana is the common name for a type of fruit and also the name for the herbaceous plants that grow it. These plants belong to the genus Musa. They are native to the tropical region of southeast Asia.'],
            ['name' => 'Blueberry', 'price' => '28000', 'image' => 'storage/img/blueberry.jpg', 'desc' => 'Blueberry refers a wild section of purple or blue berries. It grows in a type of woody plant called a shrub. Many types of blueberries grow in North America and eastern Asia. Blueberries are more common between May and October.'],
            ['name' => 'Pineapple', 'price' => '52000', 'image' => 'storage/img/pineapple.jpg', 'desc' => 'A pineapple contains fiber and vitamin C. The stem of the pineapple has an enzyme having healing effects, anti-inflammatory effects and it may reduce edema. The enzyme from the pineapple is also beneficial for a person who wants to go on a good diet.'],
            ['name' => 'Mango', 'price' => '32000', 'image' => 'storage/img/mango.jpeg', 'desc' => 'A mango is a type of fruit. The mango tree is native to South Asia, from where it has been taken to become one of the most widely cultivated fruits in the tropics. It is harvested in the month of March (summer season) until the end of May.'],
            ['name' => 'Avocado', 'price' => '28000', 'image' => 'storage/img/avocado.jpg', 'desc' => 'Avocados have much more fat than most of the other fruits, but its fat is healthy to eat (monounsaturated fat). Avocados have lots of potassium, B vitamins, and vitamin E and K. The Mexican food called guacamole is made of avocados.'],
            ['name' => 'Longan', 'price' => '14000', 'image' => 'storage/img/longan.jpg', 'desc' => 'The fruit of the longan is white, round, and together with its hard seed, looks like an eyeball when the shell is peeled off. The English name is from its pronunciation in Cantonese. There is a lot of protein and dietary fiber.'],
            ['name' => 'Pear', 'price' => '8000', 'image' => 'storage/img/pear.jpg', 'desc' => 'Pears are fruits produced and consumed around the world, growing on a tree and harvested in the Northern Hemisphere in late summer into October.']
        ];

        DB::table('items')->insert($item);
    }
}
