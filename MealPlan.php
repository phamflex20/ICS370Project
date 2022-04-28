<html>

<head>
    <title>Meal Plans</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        h1,
        h2,
        h3 {
            text-align: center;
        }

        .healthy-meal-plans {
            margin-bottom: 20px;
        }

        .meal-title {
            margin-bottom: 20px;
        }

        .meal-title:hover {
            cursor: pointer;
        }

        .day-of-week {
            display: none;
        }

        .meal {
            display: flex;
            align-items: center;
            border: 1px solid black;
            border-radius: 10px;
        }

        .image {
            padding: 10px;
            max-width: 50%;
        }

        .menu-image {
            width: 100%;
        }

        .ingredients {
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="images/logo.png" width="125px">
                </div>
                <nav>
                    <nav>
                        <ul>
                            <li><a href="Workoutpage.htm">Home</a></li>
                            <li><a href="MealPlan.php">Meal Plans</a></li>
                            <li><a href="">Bulletin Board Page</a></li>
                            <li><a href="">Account</a></li>

                        </ul>
                    </nav>

                </nav>
                <img src="images/menu.png" class="menu-icon">
            </div>
        </div>
        <div class="row">
            <div class=".col-2">
                <h1 class="title healthy-meal-plans">Healthy Meal Plans</h1>
                <p>Your Nutrionist prepare you a meal plan for your healthy journey!</p>
            </div>
        </div>
    </div>

    <script>
        function toggleMeals(dayId) {
            var element = document.getElementById(dayId);
            var style = getComputedStyle(element);
            if (style.display === "none") {
                element.style.display = "initial";
            } else {
                element.style.display = "none";
            }
        }
    </script>

    <h2 class="title meal-title" onclick="toggleMeals('sunday')">SUNDAY</h2>
    <div id="sunday" class="day-of-week">
        <h2>Breakfast</h2>
        <h3>HEAVENLY HASH</h3>
        <div class="meal">
            <div class="image">
                <img class="menu-image" src="images/Breakfast1.png" />
            </div>
            <div class="ingredients">
                Ingredients:
                <ul>
                    <li>22 oz. package frozen waffle fries</li>
                    <li>2 TBSP olive oil</li>
                    <li>1 red onion, diced</li>
                    <li>3 small zucchini, quartered</li>
                    <li>1 large head of broccoli, cut into dime-size florets</li>
                    <li>1 red bell pepper, ¼” diced</li>
                    <li>4 oz. feta cheese, crumbled</li>
                    <li>2 TBSP Italian parsley, minced</li>
                    <li>Salt & pepper</li>
                </ul>

                Directions:
                <ol>
                    <li>Preheat the oven to 425.</li>
                    <li>Spread the waffle fries out on a baking sheet and baked in the warmed oven for 25-30 minutes.</li>
                    <li>While the fries are cooking, prep all the vegetables and herbs, cutting them to the sizes specified above.</li>
                    <li>Heat olive oil over medium-high heat in a large sauté pan.</li>
                    <li>Add the onion and sauté for 3 minutes, stirring constantly.</li>
                    <li>Reduce the heat to medium and add the zucchini, broccoli and red bell pepper and sprinkle with 1 tsp salt and a few grinds of freshly, cracked pepper.</li>
                    <li>Cook for 10-15 minutes, stirring occasionally, until just cooked through.</li>
                    <li>Remove from heat and add salt to taste.</li>
                    <li>Remove the crispy, cooked waffles fries from the oven and serve by placing the waffle fries on the bottom of a plate and topping with a generous ½ C of the sautéed veggies, 1 tsp of parsley and ½ oz. of crumbled feta cheese.</li>
                </ol>
            </div>
        </div>
        <h2>Lunch</h2>
        <h3>MULTIGRAIN BLENDER CREPES</h3>
        <div class="meal">
            <div class="image">
                <img class="menu-image" src="images/Lunch1.png" />
            </div>
            <div class="ingredients">
                Ingredients:
                <ul>
                    <li> 2 TBSP rolled oats (regular or quick)</li>
                    <li> 1 C milk</li>
                    <li> ½ C water</li>
                    <li> 2 eggs</li>
                    <li> 1 TBSP butter, melted</li>
                    <li> ¼ tsp salt</li>
                    <li> 1 tsp sugar</li>
                    <li> ½ C all-purpose flour</li>
                    <li> ½ C whole wheat flour</li>
                </ul>
                Directions:
                <ol>
                    <li>Place oats in blender and blend at high for 10-15 seconds to make oat flour. </li>
                    <li>Add milk through sugar and blend till combined. </li>
                    <li>Add all-purpose and whole wheat and blend for 20 seconds. </li>
                    <li>Refrigerate batter for 1 hour.</li>
                    <li>Remove the batter from the refrigerator and, if it appears to have separated, blend for a brief few seconds to recombine. </li>
                    <li>Heat an 11-12” saucepan over medium heat. </li>
                    <li>When the pan is warm, spray with nonstick cooking spray and add ¼ C batter to the pan, lifting and swirling the pan immediately so the batter spreads thinly and uniformly around the pan.</li>
                    <li>Set the pan back on the heat and allow to cook until the edges are set and begin to pull away from the pan. </li>
                    <li>Using a rubber spatula, flip the crepe and cook for another 30 seconds. </li>
                    <li>Remove the crepe from the pan and place on a cooling rack.</li>
                    <li>If you are saving crepes for future use, stack cooled crepes between layers of wax paper and seal in a zip top bag. The crepes will keep in the fridge for 5 days.</li>
                </ol>
            </div>
        </div>
        <h2>Dinner</h2>
        <h3>SALMON IN PARCHMENT</h3>
        <div class="meal">
            <div class="image">
                <img class="menu-image" src="images/salmon1.png" />
            </div>
            <div class="ingredients">
                Ingredients:
                <ul>
                    <li> 6 – 8 oz. portions of salmon, skinless</li>
                    <li> 5 Yukon Gold potatoes, scrubbed and sliced into 1/8” thick slices</li>
                    <li> 1 bunch asparagus, rinsed and trimmed</li>
                    <li> 2 lemons, cut into 1⁄4” thick slices and halved</li>
                    <li> Salt and pepper</li>
                    <li> 6 sheets of parchment paper (around 15 x 18”)</li>
                </ul>
                Compound butter:
                <ul>
                    <li>1⁄2 C unsalted butter, softened 1⁄4 C Italian parsley, minced
                    <li>1⁄4 C Kalamata olives, minced 4 cloves garlic, minced
                    <li>2 tsp dried dill
                    <li>1 tsp peppercorns, cracked 1⁄4 tsp sea salt
                </ul>
                Directions:
                <ol>
                    <li>Preheat oven to 425°. </li>
                    <li>Make the compound butter by combining all the ingredients in a small mixing bowl and mixing well with a fork until evenly combined and distributed. </li>
                    <li>Set aside. </li>
                    <li>Lay one sheet of parchment paper on flat work surface and arrange potato slices in the middle of the bottom half of the parchment. </li>
                    <li>Aim for the potato base layer to be about 10” wide and 5” tall, with the potato slices barely overlapping each other. </li>
                    <li>Sprinkle the potatoes with salt and pepper. Place 4-5 asparagus spears atop the potato base. Place a salmon portion atop the asparagus. </li>
                    <li>Sprinkle the salmon with salt and pepper and then evenly spread 1 TBSP of the compound butter atop the salmon portion. </li>
                    <li>Place 3 halved lemon slices atop the compound butter. </li>
                    <li>Fold the parchment paper over the salmon and beginning on the left side, fold the paper over 1⁄4”. </li>
                    <li>Continue folding and pressing the seam down with your finger until you reach the row of potatoes. </li>
                    <li>Fold across the entire packet until you are left with a fully sealed rectangle of parchment. Press down any seams that appear to be unrolling. </li>
                    <li>Carefully place the salmon packet on a baking sheet. (If needed, you can now refrigerate the packet for up to 4 hours.) </li>
                    <li>Bake the salmon in parchment for 15 minutes. </li>
                    <li>Remove from the oven and let rest for 3 minutes. </li>
                    <li>Serve on individual plates and allow each person to unwrap their parchment. </li>
                </ol>
            </div>
        </div>
    </div>

    <h2 class="title meal-title" onclick="toggleMeals('monday')">MONDAY</h2>
    <div id="monday" class="day-of-week">
        <h2>Breakfast</h2>
        <h3>VEGGIES SCRAMBLE</h3>
        <div class="meal">
            <div class="image">
                <img class="menu-image" src="images/VeggieScramble.png" />
            </div>
            <div class="ingredients">
                Ingredients:
                <ul>
                    <li>2 tablespoons olive oil</li>
                    <li>1/2 red onion</li>
                    <li>1 red bell pepper (or 1/2 red and 1/2 orange)</li>
                    <li>4 cups baby kale or spinach</li>
                    <li>1 tablespoon chopped chives or other fresh herbs</li>
                    <li>4 eggs or this Tofu Scramble</li>
                    <li>¼ cup shredded Colby cheese or crumbled goat cheese (optional)</li>
                    <li>¼ teaspoon kosher salt</li>
                    <li>Fresh ground black pepper</li>
                    <li>Avocado slices, for serving</li>
                </ul>

                Directions:
                <p>
                    Prep the vegetables:
                </p>
                <ol>
                    <li>Thinly slice the red onion. Large dice the bell pepper.</li>
                </ol>

                Prep the eggs or tofu:
                <ol>
                    <li>In a medium bowl, crack the eggs and whisk them together until well-beaten. </li>
                    <li>Stir in the shredded cheese, fresh herbs, kosher salt, and plenty of fresh ground pepper. </li>
                </ol>
                Cook the vegetables:
                <ol>
                    <li>Heat the olive oil in a large skillet over medium high heat. </li>
                    <li>When hot, add the onion and peppers. </li>
                    <li> Cook 3 to 4 minutes until tender and just starting to brown, stirring occasionally. </li>
                    <li>Reduce heat to low. Add a pinch of salt and the baby greens. </li>
                    <li>Cook for 30 seconds until wilted.
                    <li>Remove and set aside.</li>
                </ol>
                Cook the eggs or tofu:
                <ol>
                    <li>Keep heat on low. </li>
                    <li>Pour in the eggs. </li>
                    <li>Cook for 20 to 30 seconds. </li>
                    <li>When the eggs just start to set, use a flat spatula to scrape sections of eggs, gently stirring constantly until cooked but still soft, about 1 minute.</li>
                    <li>Add the vegetables and serve: Add the veggies back to the pan with the eggs or tofu. </li>
                    <li>Stir for a few seconds until combined and warmed.
                    <li>Serve immediately.</li>
                </ol>
            </div>
        </div>
        <h2>Lunch</h2>
        <h3>CHOPPED SALAD</h3>
        <div class="meal">
            <div class="image">
                <img class="menu-image" src="images/Salad2.png" />
            </div>
            <div class="ingredients">

                Ingredients:
                <ul>
                    <li>1 recipe Homemade Italian Dressing</li>
                    <li>1 Romaine heart (3 cups)</li>
                    <li>5 cups leafy lettuce</li>
                    <li>1 large shallot</li>
                    <li>1 English cucumber (2 cups chopped)</li>
                    <li>½ cup cherry tomatoes</li>
                    <li>½ cup ripe green olives, halved</li>
                    <li>½ cup jarred sliced pepperoncini</li>
                    <li>¼ cup Parmesan shavings or shreds, plus more to serve</li>
                    <li>¼ teaspoon red pepper flakes, optional</li>
                </ul>
                Directions:
                <ol>
                    <li>Make the Homemade Italian Dressing.</li>
                    <li>Chop romaine and lettuce. </li>
                    <li>Thinly slice the shallot. </li>
                    <li>Peel and chop cucumber. </li>
                    <li>Slice tomatoes and olives in half.</li>
                    <li>Mix together all the ingredients for the salad, including the dressing, and toss to combine. </li>
                    <li>If making in advance, refrigerate the components separately; bring the dressing to room temperature before serving.</li>
                </ol>
            </div>
        </div>
        <h2>Dinner</h2>
        <h3>ONE POTATO AND SAUSAGE SUPPER</h3>
        <div class="meal">
            <div class="image">
                <img class="menu-image" src="images/PotatoSausageSupper.png" />
            </div>
            <div class="ingredients">

                Ingredients:
                <ul>
                    <li>1 onion, diced</li>
                    <li>4 garlic cloves, minced</li>
                    <li>1/2 red bell pepper, diced</li>
                    <li>12 oz. fully cooked chicken sausages, sliced in 1/2" rounds</li>
                    <li>6 large red potatoes, sliced to 1/8" thick</li>
                    <li>1 C water</li>
                    <li>1/2 C milk</li>
                    <li>1/2 tsp salt</li>
                    <li>1/8 tsp nutmeg</li>
                    <li>fresh cracked pepper</li>
                </ul>

                Directions:
                <ol>
                    <li>In a 12-16" skillet over medium-high heat, heat the oil and sauté the onion until tender, about 4 minutes. </li>
                    <li>While the onion sautés, combine the water through pepper in a bowl and whisk to combine. </li>
                    <li>When the onions are ready, add the garlic and sauté for 1 more minute. </li>
                    <li>Add the bell pepper and chicken sausages and cook for another 3-4 minutes, until the bell peppers soften. </li>
                    <li>Add the sliced potatoes and use a wooden spoon to evenly distribute the potatoes and sausage throughout the pan. </li>
                    <li>Pour the water and milk mixture over potatoes and sausages, turn the heat down to medium-low, cover and let cook for 15 minutes, checking periodically to ensure the bottom isn't burning. </li>
                    <li>After 15 minutes, check the potatoes to see if they're fork tender. Once the potatoes can be easily pierced with a fork, remove from the heat and serve.</li>
                </ol>
            </div>
        </div>
    </div>

    <h2 class="title meal-title" onclick="toggleMeals('tuesday')">TUESDAY</h2>
    <div id="tuesday" class="day-of-week">
        <h2>Breakfast</h2>
        <h3>BREAKFAST SANDWICH</h3>
        <div class="meal">
            <div class="image">
                <img class="menu-image" src="images/BreakfastSandwich.png" />
            </div>
            <div class="ingredients">
                Ingredients:
                <ul>
                    <li>1 whole grain English muffin (or bagel thins: vegan option)</li>
                    <li>1 egg (or 2 eggs, for a more filling sandwich)</li>
                    <li>3 pinches kosher salt, divided</li>
                    <li>1 drizzle olive oil</li>
                    <li>1 ½ cups baby spinach (or chopped spinach)</li>
                    <li>1 pinch garlic powder</li>
                    <li>1 tablespoon feta cheese</li>
                    <li>1 slice tomato</li>
                    <li>1/4 ripe avocado, mashed</li>
                </ul>
                Directions:
                <ol>
                    <li>Toast the English muffin.</li>
                    <li>Meanwhile, whisk the egg and add 1 pinch salt and fresh groundpepper. </li>
                    <li>Add a drizzle olive oil to a very small nonstick skillet over medium heat. </li>
                    <li>Add the spinach and 1 pinch each salt and garlic powder,and cook until it is wilted, about 2 minutes. </li>
                    <li>Spread the spinach to cover the bottom of the pan. </li>
                    <li>Pour in egg, adjusting it with a spatula so it covers the entire bottom of the pan. </li>
                    <li>Sprinkle with the feta cheese and cook, without flipping, for about 2 minutes until mostly set. </li>
                    <li>Once mostly set, fold the egg in half, then in half again to make a wedge.</li>
                    <li>Mash the avocado with another pinch salt, and spread it on the top half of the English muffin. </li>
                    <li>Add the last pinch of salt to the tomato slice. </li>
                    <li>Place the eggs on the bottom of the English muffin, then add the eggs, tomato, and top half of the English muffin. </li>
                    <li>Enjoy immediately.</li>
                </ol>
            </div>
        </div>
        <h2>Lunch</h2>
        <h3>KALE SALAD</h3>
        <div class="meal">
            <div class="image">
                <img class="menu-image" src="images/KaleSalad3.png" />
            </div>
            <div class="ingredients">
                Ingredients:
                <ul>
                    <li>1 large bunch Tuscan kale (about 8 ounces)</li>
                    <li>1 very small or 1/2 medium garlic clove</li>
                    <li>¼ teaspoon kosher salt</li>
                    <li>3 tablespoons olive oil</li>
                    <li>1 lemon (3 to 4 tablespoons juice, plus zest)</li>
                    <li>¼ cup freshly grated Parmesan cheese</li>
                    <li>⅛ teaspoon red pepper flakes</li>
                    <li>Fresh ground black pepper</li>
                    <li>Homemade croutons (optional)</li>
                </ul>
                Directions:
                <ol>
                    <li>Wash and dry the kale. </li>
                    <li>Then destem and roughly chop the kale leaves.</li>
                    <li>Peel and mince the garlic clove. </li>
                    <li>Sprinkle it with the kosher salt, then holding the blunt edge of the knife, scrape the sharp edge of the blade over the minced garlic, holding the knife at an angle and mashing the garlic into a paste.</li>
                    <li>Place the paste in a medium bowl. </li>
                    <li>Add the olive oil, lemon juice, red pepper flakes, and fresh ground black pepper, and whisk to combine. </li>
                    <li>Add the Parmesan cheese and stir to combine.</li>
                    <li>Toss the dressing with the kale leaves. </li>
                    <li>Serve topped with lemon zest (and additional Parmesan cheese, if desired). </li>
                    <li>If desired, serve with homemade croutons. </li>
                </ol>
            </div>
        </div>
        <h2>Dinner</h2>
        <h3>EASY BAKED FISH</h3>
        <div class="meal">
            <div class="image">
                <img class="menu-image" src="images/EasyBakedFish.png" />
            </div>
            <div class="ingredients">
                Ingredients:
                <ul>
                    <li>1 1/2 pounds white fish fillets (tilapia, halibut, cod, snapper, and so forth)</li>
                    <li>1 pint cherry tomatoes, sliced in half</li>
                    <li>¼ cup green olives, sliced in half (optional*; we like Castelvetrano)</li>
                    <li>¼ cup red onion, thinly sliced</li>
                    <li>3 garlic cloves, minced</li>
                    <li>2 tablespoons capers, drained</li>
                    <li>2 tablespoons chopped fresh parsley, divided</li>
                    <li>2 tablespoons olive oil, divided</li>
                    <li>1 teaspoon kosher salt, divided</li>
                    <li>Fresh ground black pepper</li>
                    <li>1 tablespoon dried oregano</li>
                    <li>2 tablespoons lemon juice</li>
                </ul>
                Directions:
                <ol>
                    <li>Preheat the oven to 425 degrees Fahrenheit. </li>
                    <li>Allow the fish to stand at room temperature while prepping the vegetables.</li>
                    <li>Chop the tomatoes, olives, red onion and garlic, as noted above.</li>
                    <li>Place the chopped vegetables, drained capers, and 1 tablespoon chopped parsley in the bottom of a 9 x 13″ baking dish. </li>
                    <li>Mix with 1 tablespoon olive oil, ¼ teaspoon salt, and fresh ground black pepper.</li>
                    <li>Pat the fish dry. </li>
                    <li>Rub it with 1 tablespoon olive oil and ¾ teaspoon kosher salt, split between the filets. </li>
                    <li>Sprinkle both with the oregano and a few grinds black pepper. </li>
                    <li>Place the fillets on top of the vegetables in the pan, then gently drizzle the fillets with the lemon juice.</li>
                    <li>Place the pan in the oven and bake for 20 to 25 minutes (depending on the thickness of the fish; check at 15 minutes for very thin fillets, until the fish is flaky and the internal temperature is 140 degrees Fahrenheit when measured with a food thermometer. </li>
                    <li>Garnish with the remaining 1 tablespoon chopped parsley and serve immediately, adding a few spoonful of vegetables to each plate (over the top or next to the fish).</li>
                </ol>
            </div>
        </div>
    </div>

    <h2 class="title meal-title" onclick="toggleMeals('wednesday')">WEDNESDAY</h2>
    <div id="wednesday" class="day-of-week">
        <h2>Breakfast</h2>
        <h3>Good Morning Granola</h3>
        <div class="meal">
            <div class="image">
                <img class="menu-image" src="images/Granola.png" />
            </div>
            <div class="ingredients">
                Ingredients:
                <ul>
                    <li> 4 cup old-fashioned oats</li>
                    <li> ½ cup walnuts, chopped</li>
                    <li> ¼ cup pepitas</li>
                    <li> ½ cup dried apricots, cut into fourths</li>
                    <li> ½ cup craisins</li>
                    <li> ¼ cup canola or coconut oil</li>
                    <li> ½ cup honey</li>
                    <li> ¼ tsp salt</li>
                </ul>
                Directions:
                <ol>
                    <li>Preheat oven to 350. </li>
                    <li>In a large bowl, stir oats through craisins to combine. </li>
                    <li>In a 2 cup glass measuring cup, mix honey, oil and salt with a mixer until emulsified. </li>
                    <li>Pour honey mixture over oats and mix well with a
                    <li>spoon until evenly distributed. </li>
                    <li>Spread oats evenly on a rimmed baking sheet that has been sprayed with nonstick spray. </li>
                    <li>Bake for 15 minutes, until golden brown. </li>
                    <li>Allow to cool completely before breaking into chunks and storing in an airtight container. </li>
                </ol>
            </div>
        </div>
        <h2>Lunch</h2>
        <h3>BROCOLI SALAD</h3>
        <div class="meal">
            <div class="image">
                <img class="menu-image" src="images/BrocoliSalad4.png" />
            </div>
            <div class="ingredients">
                Ingredients
                <ul>
                    <li>1 1/2 to 2 pounds broccoli on the stalk, enough for 8 cups florets</li>
                    <li>1 cup sliced red onion</li>
                    <li>1 carrot, julienned or grated</li>
                    <li>½ cup raisins</li>
                    <li>½ cup mayonnaise (vegan mayo as needed)</li>
                    <li>3 tablespoons apple cider vinegar</li>
                    <li>1 tablespoon sugar or maple syrup</li>
                    <li>2 teaspoon Dijon mustard</li>
                    <li>1 teaspoon kosher salt</li>
                </ul>

                for the topping (Optional)
                <ul>
                    <li>¼ cup sunflower seeds</li>
                    <li>1 tablespoon soy sauce or tamari</li>
                    <li>1 tablespoon maple syrup or sugar</li>
                    <li>1 teaspoon smoked paprika</li>
                </ul>
                Directions:
                <ol>
                    <li>Chop the broccoli into very small florets. </li>
                    <li>Slice the red onion. Stir together with the raisins.</li>
                    <li>Whisk together the mayo, apple cider vinegar, sugar, Dijon mustard and salt. </li>
                    <li>Add to the vegetables and mix to combine. </li>
                    <li>Refrigerate for 1 hour to allow the flavors to meld and the broccoli to become soft (you can eat right away but the broccoli is crisp and has less of the traditional texture). </li>
                    <li>Meanwhile, place the sunflower seeds, soy sauce, sugar, smoked paprika, and 2 pinches kosher salt in a skillet. </li>
                    <li>Heat over medium low heat and sauté for about 5 to 6 minutes, stirring frequently, until they are sticky and most of the liquid is evaporated, taking care that they do not burn and scraping any sticky bits from the bottom of the pan. </li>
                    <li>When they are sticky and darkened in color (and may have clumped together), remove from the heat and spread them onto parchment paper in a single layer and allow them to dry until serving, about 10 minutes. </li>
                    <li>When ready to serve, top the salad with the sunflower seeds. </li>
                </ol>
            </div>
        </div>
        <h2>Dinner</h2>
        <h3>EASY BAKED FISH</h3>
        <div class="meal">
            <div class="image">
                <img class="menu-image" src="images/EasyBakedFish.png" />
            </div>
            <div class="ingredients">
                Ingredients:
                <ul>
                    <li>1 ½ pounds medium shrimp, deveined and thawed if frozen (tail on or peeled)</li>
                    <li>½ teaspoon kosher salt</li>
                    <li>2 teaspoons purchased Cajun seasoning OR 1 ½ tablespoons homemade Cajun seasoning</li>
                    <li>½ teaspoon garlic powder</li>
                    <li>½ teaspoon onion powder</li>
                    <li>2 tablespoons olive oil</li>
                </ul>
                Directions:
                <ol>
                    <li>Pat the shrimp dry.</li>
                    <li>In a medium bowl, mix the shrimp with ½ teaspoon kosher salt, the Cajun seasoning, garlic powder and onion powder.</li>
                    <li>In your largest skillet* (cast iron or stainless preferred), heat the olive oil on medium high heat. </li>
                    <li>Add the shrimp and cook for 1 to 2 minutes per side until just opaque and cooked through, turning them with tongs. </li>
                    <li>Once cooked through, serve immediately.</li>
                </ol>
            </div>
        </div>
    </div>

    <h2 class="title meal-title" onclick="toggleMeals('thursday')">THURSDAY</h2>
    <div id="thursday" class="day-of-week">
        <h2>Breakfast</h2>
        <h3>Everything Bagel Avocado Toast</h3>
        <div class="meal">
            <div class="image">
                <img class="menu-image" src="images/EverythingBagelAvocadoToast.png" />
            </div>
            <div class="ingredients">
                Ingredients:
                <ul>
                    <li>2 tbsp sesame seeds</li>
                    <li>1 tbsp poppy seeds</li>
                    <li>1 tbsp dried minced onion</li>
                    <li>1 tbsp dried minced garlic</li>
                    <li>1 tsp flaked sea salt</li>
                    <li>1 avocado</li>
                    <li>1/2 lemon, juice</li>
                    <li>2 slices sourdough bread</li>
                    <li>1/4 cup cream cheese</li>
                    <li>1/4 English cucumber, sliced</li>
                </ul>
                Directions:
                <ol>
                    <li> In a small bowl, whisk together the sesame seeds, poppy seeds, onion flakes, garlic flakes, and sea salt. Set it aside.</li>
                    <li>In a medium bowl, smash the avocado with the lemon juice. </li>
                    <li>Set it aside.</li>
                    <li> a layer of cream cheese on the toast. </li>
                    <li>Top with a layer of the smashed avocado. </li>
                    <li>Add some cucumber slices and season with the everything bagel seasoning.</li>
                    <li>Serve immediately.</li>
                </ol>
            </div>
        </div>
        <h2>Lunch</h2>
        <h3>Brussels Sprouts Salad</h3>
        <div class="meal">
            <div class="image">
                <img class="menu-image" src="images/BrusselsSproutsSalad5.png" />
            </div>
            <div class="ingredients">
                Ingredients:
                For the salad
                <ul>
                    <li>1 pound Brussels sprouts, enough for 4 cups shredded (or 8 ounces shredded)</li>
                    <li>1 ½ cups chopped escarole or other crunchy leafy green, optional</li>
                    <li>1 large crisp tart red apple (like Honeycrisp)</li>
                    <li>½ cup dried tart cherries</li>
                    <li>½ cup almonds (Marcona almonds, if possible)</li>
                    <li>¼ teaspoon kosher salt</li>
                    <li>1 recipe Dijon Mustard Dressing</li>
                    <li>Feta cheese crumbles, optional (omit for vegan)</li>
                </ul>
                Directions:

                Shred the Brussels sprouts:
                <ol>
                    <li>go to How to Shred Brussels Sprouts or use a food processor slicing blade or mandoline to slice each sprout from top to end.</li>
                    <li>Prep the vegetables: Chop the escarole or other leafy green. </li>
                    <li>Dice the apple.</li>
                </ol>
                Make the dressing:
                <ol>
                    <li>In a medium bowl, whisk together the Dijon mustard, white wine vinegar, maple syrup, and salt. </li>
                    <li>Then whisk in the olive oil 1 tablespoon at a time until a creamy dressing forms.</li>
                    <li>Assemble the salad: Mix together all salad ingredients. </li>
                    <li>Mix with ½ cup of the dressing (add more to taste, if desired). Top with feta crumbles, if using, and serve.</li>
                </ol>
                </ol>
            </div>
        </div>
        <h2>Dinner</h2>
        <h3>EASY BAKED FISH</h3>
        <div class="meal">
            <div class="image">
                <img class="menu-image" src="images/EasyBakedFish.png" />
            </div>
            <div class="ingredients">
                Ingredients:
                <p>For the grain</p>
                <ul>
                    <li>Seasoned Quinoa (shown here)</li>
                    <li>White or Brown Rice (season like the quinoa)</li>
                    <li>Farro</li>
                    <li>Bulgur Wheat</li>
                    <li>Millet</li>
                </ul>
                <p>For the grain bowl</p>
                <ul>
                    <li>2 15-ounce can chickpeas*</li>
                    <li>2 small garlic cloves</li>
                    <li>2 tablespoons olive oil</li>
                    <li>½ teaspoon smoked paprika or regular paprika</li>
                    <li>1 teaspoon kosher salt</li>
                    <li>1 recipe Tahini Sauce</li>
                    <li>1 pint cherry tomatoes</li>
                    <li>1 English cucumber</li>
                    <li>½ cup Kalamata olives (optional)</li>
                    <li>1/4 red onion</li>
                </ul>
                Directions:

                <p> Make the grain: </p>
                <ol>
                    <li>Go to Seasoned Quinoa to make the quinoa, or follow the other whole grain recipes listed above. </li>
                    <li>The quinoa takes about 25 minutes total, so use the cook time to prepare the remaining ingredients.</li>
                </ol>
                <p>Make the chickpeas: </p>
                <ol>
                    <li>Drain and rinse the chickpeas. </li>
                    <li>Mince the garlic. </li>
                    <li>In a large skillet, heat the olive oil over medium heat. </li>
                    <li>Add the garlic and sauté for 1 minute until fragrant but before it browns. </li>
                    <li>Add the chickpeas, smoked paprika, salt, and several grinds of black pepper. </li>
                    <li>Cook 2 minutes until warmed through.</li>
                </ol>
                <p>Make the sauce: </p>
                <ol>
                    <li>Make the Tahini Sauce. (Or, try Lemon Dill Sauce or Creamy Cilantro Sauce.)</li>
                </ol>
                <p>Prep the veggies: </p>
                <ol>
                    <li>Slice the tomatoes in half. </li>
                    <li>Slice the cucumber. </li>
                    <li>Slice the red onion.</li>
                </ol>
                <p>Assemble the bowls: </p>
                <ol>
                    <li>Place the quinoa and chickpeas in the bowl. </li>
                    <li>Add the fresh veggies and drizzle with the sauce.</li>
                </ol>
            </div>
        </div>
    </div>

    <h2 class="title meal-title" onclick="toggleMeals('friday')">FRIDAY</h2>
    <div id="friday" class="day-of-week">
        <h2>Breakfast</h2>
        <h3>OVERNIGHT CROCKPOT OATMEAL</h3>
        <div class="meal">
            <div class="image">
                <img class="menu-image" src="images/OvernightOatmeal.png" />
            </div>
            <div class="ingredients">
                Ingredients:
                <ul>
                    <li> 3.5 C Water </li>
                    <li> 1 C Steel cut oats </li>
                </ul>
                Directions:
                <ol>
                    <li> Pour 4 cups of water in a large crockpot.</li>
                    <li> In a 4 cup Pyrex container combine 3½ cups of water and oats.</li>
                    <li> Rest the Pyrex container inside the crockpot and place the lid on the crockpot.</li>
                    <li> Cook on Low for 6-8 hours.</li>
                    <li> Serve and top with your favorite dried fruits, brown sugar, or nuts!</li>
                </ol>
            </div>
        </div>
        <h2>Lunch</h2>
        <h3>HEARTBEAT VEGETABLE BURGERS</h3>
        <div class="meal">
            <div class="image">
                <img class="menu-image" src="images/VegetablesBurger.png" />
            </div>
            <div class="ingredients">
                Ingredients:
                <ul>
                    <li> 2 1/2 cooked, mashed sweet potatoes</li>
                    <li> 3/4 cup trail mix</li>
                    <li> 1 large golden beet, grated</li>
                    <li> 1 red beet, grated</li>
                    <li> 1/2 cup whole wheat flour</li>
                    <li> 1/2 cup whole wheat bread crumbs</li>
                    <li> 1/3 cup olive oil</li>
                    <li> 1/2 red onion, minced</li>
                    <li> 5 tablespoons parsley, minced</li>
                    <li> 3 tablespoons tamari</li>
                    <li> 1 tablespoon sea salt</li>
                    <li> 4 cloves garlic, minced</li>
                    <li> 1/2 teaspoon red pepper flakes</li>
                </ul>
                Directions:
                <ol>
                    <li>Preheat oven to 350 degrees F (175 degrees C).</li>
                    <li>Grease a baking sheet.</li>
                    <li>Combine sweet potatoes, quinoa, trail mix, golden beet, red beet, flour, bread crumbs, oil, onion, parsley, tamari, sea salt, garlic, and red pepper flakes in a large bowl. </li>
                    <li>Mix by hand until burger mix is thoroughly combined.</li>
                    <li>Divide burger mix into 10 portions; press each one firmly into a patty. </li>
                    <li>Place on the prepared baking sheet.</li>
                    <li>Bake in the preheated oven until golden brown, about 20 minutes.</li>
                </ol>
            </div>
        </div>
        <h2>Dinner</h2>
        <h3>HEARTBEAT VEGETABLE BURGERS</h3>
        <div class="meal">
            <div class="image">
                <img class="menu-image" src="images/HoneyDijonChicken.png" />
            </div>
            <div class="ingredients">
                Ingredients:
                <ul>
                    <li>4 boneless skinless chicken breasts</li>
                    <li>1 tbsp oil</li>
                    <li>1 yellow onion, diced</li>
                    <li>1 garlic clove, minced</li>
                    <li>1 cup chicken broth</li>
                    <li>1/4 cup honey</li>
                    <li>1/4 cup Dijon mustard</li>
                    <li>1 tsp fresh thyme leaves</li>
                    <li>Salt and pepper to taste</li>
                </ul>
                Directions:
                <ol>
                    <li>Season the chicken with salt and pepper to taste. </li>
                    <li>In a large skillet, heat the oil over medium-high heat. </li>
                    <li>Arrange the chicken in the skillet and cook until it is golden, about 5 minutes. </li>
                    <li>Flip the chicken over and continue to cook until the remaining side is golden, another 2 to 3 minutes. </li>
                    <li>Remove the chicken from the skillet and set it aside.</li>
                    <li>Add the onion to the skillet, and cook, stirring, until it begins to soften, about 2 to 3 minutes. </li>
                    <li>Add the garlic and cook until it becomes fragrant, about 30 seconds. </li>
                    <li>Stir in the chicken broth and bring it to a simmer. Stir in the honey, mustard, and thyme. </li>
                    <li>Return the chicken to the skillet, flipping it in the sauce to evenly coat. </li>
                    <li>Reduce the heat to medium and continue to cook until the chicken reaches an internal temperature of 165ºF. </li>
                    <li>Serve immediately or store in the refrigerator for up to 3 days.</li>
                </ol>
            </div>
        </div>
    </div>

    <h2 class="title meal-title" onclick="toggleMeals('saturday')">SATURDAY</h2>
    <div id="saturday" class="day-of-week">
        <h2>Breakfast</h2>
        <h3>Strawberries Oatmeal</h3>
        <div class="meal">
            <div class="image">
                <img class="menu-image" src="images/StrawberriesOatmeal.png" />
            </div>
            <div class="ingredients">
                Ingredients:
                <ul>
                    <li>2 cups 2% milk</li>
                    <li>1 cup old-fashioned rolled oats (gluten-free)</li>
                    <li>2 tbsp honey </li>
                    <li>1 tsp vanilla extract </li>
                    <li>2 tbsp heavy cream </li>
                    <li>1/2 cup chopped strawberries </li>
                </ul>
                Directions:
                <ol>
                    <li>In a medium pot, heat the milk over medium heat. </li>
                    <li>Once hot, reduce the heat to low and stir in the oats, honey, and vanilla extract. </li>
                    <li>Cook, stirring often, until all of the milk has been absorbed, about 10 minutes. </li>
                    <li>Serve immediately topped with the cream and chopped strawberries. </li>
                    <li>Store in the refrigerator for up to 3 days. </li>
                </ol>
            </div>
        </div>
        <h2>Lunch</h2>
        <h3>DETOX SALAD</h3>
        <div class="meal">
            <div class="image">
                <img class="menu-image" src="images/DetoxSalad.png" />
            </div>
            <div class="ingredients">
                Ingredients:
                <ul>
                    <li>1/4 cup olive oil</li>
                    <li>1 lemon, juice</li>
                    <li>2 tbsp honey</li>
                    <li>1 tsp grated fresh ginger
                        Salt and pepper to taste</li>
                    <li>4 cups green kale, finely chopped</li>
                    <li>2 cups shredded red cabbage</li>
                    <li>2 cups shredded Brussels sprouts</li>
                    <li>2 cups broccoli florets, finely chopped</li>
                    <li>1/2 cup chopped fresh parsley</li>
                    <li>1/4 cup slivered almonds</li>
                </ul>
                Directions:
                <ol>
                    <li>In a small bowl, whisk together the olive oil, lemon juice, honey, ginger, salt, and pepper.</li>
                    <li>In a large bowl, combine the kale, red cabbage, Brussels sprouts, broccoli florets, parsley, and dressing. </li>
                    <li>Toss well.</li>
                    <li>Serve immediately topped with slivered almonds or store in the refrigerator for up to 4 days.</li>
                </ol>
            </div>
        </div>
        <h2>Dinner</h2>
        <h3>Black Bean Tacos</h3>
        <div class="meal">
            <div class="image">
                <img class="menu-image" src="images/BlackBeanTacos.png" />
            </div>
            <div class="ingredients">
                Ingredients:
                <ul>
                    <li>1 cup prepared salsa</li>
                    <li>1 15-oz can black beans, drained and rinsed</li>
                    <li>1 tbsp chili powder</li>
                    <li>1/2 tsp ground cumin</li>
                    <li>6 corn tortillas</li>
                    <li>1 cup shredded romaine lettuce</li>
                    <li>1/3 cup sour cream</li>
                    <li>1 avocado, sliced</li>
                    <li>1/2 cup quartered cherry tomatoes
                        Salt and pepper to taste</li>
                </ul>
                Directions:
                <ol>
                    <li>In a skillet, heat the salsa over medium heat. </li>
                    <li>Add the black beans, chili powder, and ground cumin. </li>
                    <li>Season with salt and pepper to taste. </li>
                    <li>Cook, stirring, until the flavours concentrate and the salsa begins to thicken, about 5 minutes.</li>
                    <li>Turn the heat off and using a potato masher, lightly mash the beans.</li>
                    <li>To assemble the tacos, top each tortilla with some of the romaine lettuce, black bean mixture, sour cream, avocado, and tomatoes.</li>
                    <li>Serve immediately or store the bean filling in the refrigerator for up to 5 days</li>
                </ol>
            </div>
        </div>
    </div>
</body>

</html>
