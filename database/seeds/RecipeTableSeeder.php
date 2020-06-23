<?php

use App\Recipe;
use Illuminate\Database\Seeder;

class RecipeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Recipe::truncate();
        
        Recipe::create(array('id' => 1, 'title' => 'Greek Chicken Skewers', 'user_id' => 1, 'description' => 'Greek-inspired chicken skewers with lots of flavor! Marinade is also wonderful on grilled vegetables.', 'prep' => '20 min', 'cook' => '20 min', 'difficulty' => 'Easy', 'serves' => 2, 'ingredients' => '1 tablespoon lemon juice
1 tablespoon and 1/4 teaspoon wok oil
1-1/2 teaspoons red wine vinegar
3/4 teaspoon onion flakes
1/4 teaspoon minced garlic
1/4 lemon, zested
1/4 teaspoon Greek seasoning
1/4 teaspoon poultry seasoning
1/4 teaspoon dried oregano
1/4 teaspoon ground black pepper
1/8 teaspoon dried thyme
3/4 skinless, boneless chicken breasts, or as needed, cut into 1-inch pieces
2 bamboo skewers, or as needed, soaked in water for 30 minutes', 'preparation' => ' Step 1
Whisk lemon juice, oil, vinegar, onion flakes, garlic, lemon zest, Greek seasoning, poultry seasoning, oregano, pepper, and thyme together in a bowl and pour into a resealable plastic bag.
 Step 2
Add chicken, coat with the marinade, squeeze out excess air, and seal the bag. Marinate in the refrigerator for at least 2 hours.
 Step 3
Preheat the oven to 350 degrees F (175 degrees C).
 Step 4
Remove chicken from the marinade and shake off excess; thread onto skewers. Discard the remaining marinade. Place the skewers on a baking sheet.'));
        
        Recipe::create(array('id' => 2, 'title' => 'Yummy Honey Chicken Kabobs', 'user_id' => 2, 'description' => 'Honey chicken kabobs with veggies. You can marinate overnight and make these kabobs for an outdoor barbecue as a tasty alternative to the usual barbecue fare!', 'prep' => '15 min', 'cook' => '15 min', 'difficulty' => 'Easy', 'serves' => 12, 'ingredients' => '¼ cup vegetable oil
⅓ cup honey
⅓ cup soy sauce
¼ teaspoon ground black pepper
8 skinless, boneless chicken breast halves - cut into 1 inch cubes
2 cloves garlic
5 small onions, cut into 2 inch pieces
2 red bell peppers, cut into 2 inch pieces
12 eaches skewers', 'preparation' => ' Step 1
In a large bowl, whisk together oil, honey, soy sauce, and pepper. Before adding chicken, reserve a small amount of marinade to brush onto kabobs while cooking. Place the chicken, garlic, onions and peppers in the bowl, and marinate in the refrigerator at least 2 hours (the longer the better).
 Step 2
Preheat the grill for high heat.
 Step 3
Drain marinade from the chicken and vegetables, and discard marinade. Thread chicken and vegetables alternately onto the skewers.
 Step 4
Lightly oil the grill grate. Place the skewers on the grill. Cook for 12 to 15 minutes, until chicken juices run clear. Turn and brush with reserved marinade frequently.'));
        
        Recipe::create(array('id' => 3, 'title' => 'Bucatini Pasta with Shrimp and Anchovies', 'user_id' => 3, 'description' => 'This pasta dish is both fresh and hearty! The fresh taste of summer from the zucchini and tomatoes contrasts nicely with the earthy saltiness of the anchovies', 'prep' => '10 min', 'cook' => '15 min', 'difficulty' => 'MEDIUM', 'serves' => 4, 'ingredients' => '1 pound bucatini pasta
1 (2 ounce) can anchovy fillets, oil reserved
1 teaspoon red pepper flakes, or to taste
3 cloves garlic, minced
2 eaches zucchini, halved lengthwise and cut in 1/4 inch slices
1 pint grape tomatoes
2 teaspoons dried oregano
2 teaspoons dried basil
1 pound peeled and deveined medium shrimp', 'preparation' => ' Step 1
Bring a large pot of lightly salted water to a boil. Add pasta and cook for 8 to 10 minutes or until al dente; drain.
 Step 2
Meanwhile, stir together the anchovies and their oil with the red pepper flakes and garlic in a large skillet over medium heat, breaking up the anchovies as you stir. Once the garlic begins to sizzle, add the sliced zucchini, and cook until it begins to soften, about 3 minutes. Stir in the grape tomatoes, and continue cooking until the zucchini is tender, and the skins of the tomatoes begin to pop, 5 minutes more.
 Step 3
Sprinkle the vegetable mixture with oregano and basil, then stir in shrimp. Cook until the shrimp turn pink and are no longer translucent. Pour over bucatini to serve.'));
        
        Recipe::create(array('id' => 4, 'title' => 'Grilled Spicy Shrimp Tacos', 'user_id' => 4, 'description' => NULL, 'prep' => '15 min', 'cook' => '25 min', 'difficulty' => 'Medium', 'serves' => 20, 'ingredients' => 'Shrimp Marinade:
1 ½ cups lime juice
3 tablespoons olive oil
2 tablespoons chili powder
1 teaspoon mayonnaise
3 pounds uncooked medium shrimp, peeled and deveined
Chipotle Sauce:
½ cup enchilada sauce
½ (4 ounce) jar diced jalapeno peppers
5 teaspoons honey
3 teaspoons lime juice
1 pinch salt to taste
Red Slaw:
½ head red cabbage, shredded, or more to taste
2 bunches scallions, chopped
3 tablespoons olive oil
3 tablespoons white vinegar
1 small bunch cilantro, chopped
20 (8 inch) corn tortillas', 'preparation' => ' Step 1
Mix lime juice, olive oil, chili powder, and mayonnaise together in a bowl. Add shrimp and marinade for at least 1 hour.
 Step 2
Mix enchilada sauce, jalapenos, honey, lime juice, and salt together in a separate bowl for the sauce.
 Step 3
Toss cabbage with scallions, olive oil, vinegar, and cilantro in a large bowl for the slaw.
 Step 4
Heat tortillas in a frying pan over medium-high heat, about 30 seconds per side. Keep warm.
 Step 5
Preheat an outdoor grill for medium heat and lightly oil the grate.
 Step 6
Remove shrimp from marinade. Grill until opaque, about 5 minutes. Add shrimp to each tortilla; top with the sauce and slaw.'));
                
        Recipe::create(array('id' => 5, 'title' => 'Bacon and Egg Doughnuts', 'user_id' => 1, 'description' => 'I\'ve always wanted to try making some kind of sweet/savory bacon-studded fritter using pate a choux, also known as that stuff you make cream puffs with', 'prep' => '25 min', 'cook' => '7 min', 'difficulty' => 'Medium', 'serves' => 6, 'ingredients' => '1 cup cold water
2 tablespoons cold water
½ cup butter
2 tablespoons white sugar
¼ teaspoon salt
⅛ teaspoon freshly grated nutmeg
1 cup all-purpose flour
½ teaspoon vanilla extract
4 large eggs
12 strips bacon, sliced crosswise into 1/2-inch pieces
1 quart vegetable oil for deep frying
¼ cup maple syrup, for serving
¼ teaspoon salt', 'preparation' => ' Step 1
Pour 1 cup plus 2 tablespoons cold water into a saucepan over medium-high heat. Add butter, sugar, salt and nutmeg. When mixture starts to simmer, reduce heat to medium and add flour. Cook, stirring constantly, until mixture comes together into a soft dough ball, about 2 minutes. Remove from heat and transfer to a mixing bowl. Pour in vanilla extract. Break up dough with a whisk or fork, and let cool for about 5 minutes.
 Step 2
Break an egg into the bowl with the dough and whisk until egg is incorporated and dough becomes smooth and sticky, 4 to 5 minutes. Dough will stick inside the whisk; clean out dough with a spatula before adding successive eggs, 1 at a time. Whisk in each egg until thoroughly incorporated into the dough. Clear dough from whisk; scrape down sides of bowl. Cover dough with plastic wrap and chill for about an hour.
 Step 3
Place bacon in cold skillet. Cook over medium heat, stirring occasionally, until bacon is browned and crisp and fat is rendered, 5 to 8 minutes. Transfer bacon pieces to a paper towel-lined plate to drain. When bacon is cool enough to handle, place it on a cutting board and chop into small pieces. Reserve some bacon bits for topping the doughnuts.
 Step 4
Heat oil in a deep-fryer or large saucepan to 350 degrees F (175 degrees C).
 Step 5
Remove dough from refrigerator and stir in bacon pieces.
 Step 6
Drop dough by scoopfuls (about 2 tablespoons) into hot oil. Fry in batches to avoid crowding. Fry until dough begins to puff and brown, turning occasionally. After doughnuts expand and crack, keep turning them until they are evenly browned, about 7 minutes. Transfer to paper toweled-lined plate to drain slightly.
 Step 7
Serve hot, drizzled with maple syrup and topped with bacon pieces.'));
                
        Recipe::create(array('id' => 6, 'title' => 'Lemon-Ricotta Cornmeal Waffles', 'user_id' => 2, 'description' => 'Slightly dense waffles with a hint of lemon flavor and ricotta cheese for richness. If you like corn muffins, I think you will like these. Pairs well with fresh berries.', 'prep' => '10 min', 'cook' => '20 min', 'difficulty' => 'Easy', 'serves' => 4, 'ingredients' => '1 cup all-purpose flour
½ cup cornmeal
¼ cup white sugar
1 ½ teaspoons baking powder
½ teaspoon baking soda
¼ teaspoon salt
¾ cup half-and-half
½ cup ricotta cheese
2 large eggs
2 tablespoons melted butter
1 teaspoon lemon extract
1 serving cooking spray', 'preparation' => ' Step 1
Preheat a waffle iron according to manufacturer\'s instructions.
 Step 2
Whisk flour, cornmeal, sugar, baking powder, baking soda, and salt together in a large mixing bowl.
 Step 3
Whisk half-and-half, ricotta cheese, eggs, melted butter, and lemon extract together in a separate bowl until smooth. Pour into the flour mixture and mix until thoroughly combined.
 Step 4
Coat the preheated waffle iron with cooking spray. Pour batter into waffle iron in batches and cook until crisp and golden brown and the iron stops steaming, about 5 minutes.'));
                
        Recipe::create(array('id' => 7, 'title' => 'Li\'l Woody\'s Farmers Market Burger', 'user_id' => 3, 'description' => NULL, 'prep' => '35 min', 'cook' => '8 min', 'difficulty' => 'Hard', 'serves' => 6, 'ingredients' => 'Seasoning Mixture:
⅔ cup sea salt
1 ounce dried porcini mushrooms
2 teaspoons dried thyme
2 teaspoons garlic powder
1 teaspoon freshly ground black pepper
1 teaspoon red pepper flakes
Aioli:
2 eaches egg yolks
½ lemon, juiced
1 teaspoon finely chopped garlic
1 teaspoon finely chopped fresh dill
¾ cup canola oil
¼ cup olive oil
Pickled Red Onions:
1 pound red onions, sliced into half moons
½ cup red wine vinegar
2 teaspoons white sugar
1 pinch salt and ground black pepper to taste
Burgers:
6 brioche buns, halved
2 pounds ground beef
9 ounces crumbled goat cheese (chevre)
12 slices heirloom tomatoes
3 cups arugula', 'preparation' => ' Step 1
Combine sea salt, porcini mushrooms, thyme, garlic powder, 1 teaspoon black pepper, and red pepper flakes in a food processor; blend until thoroughly mixed. Pour seasoning mixture into a bowl.
 Step 2
Combine egg yolks, lemon juice, garlic, and dill in the food processor; blend, pouring in canola oil and olive oil in a steady stream until aioli is thick and smooth.
 Step 3
Combine sliced onions, red wine vinegar, sugar, salt, and pepper in an airtight container. Let marinate, at least 15 minutes.
 Step 4
Preheat an outdoor grill for medium heat and lightly oil the grate.
 Step 5
Spread buns on grill and toast until golden, 30 seconds to 1 minute. Transfer to a serving platter. Spread some aioli over each half.
 Step 6
Shape ground beef into 6 large patties. Sprinkle seasoning mixture generously over both sides.
 Step 7
Increase grill heat to high. Grill patties until browned and an instant-read thermometer inserted into the center reads 160 degrees F (71 degrees C), about 4 minutes per side.
 Step 8
Place 1 cooked patty on the bottom of each toasted bun. Top each with 3 tablespoons goat cheese, 2 tomato slices, 1 heaping tablespoon pickled red onions, and 1/2 cup arugula. Cover with top half of the bun.'));
                
        Recipe::create(array('id' => 8, 'title' => 'Juiciest Hamburgers Ever', 'user_id' => 3, 'description' => 'No more dry, lackluster burgers', 'prep' => '15 min', 'cook' => '10 min', 'difficulty' => 'Easy', 'serves' => 8, 'ingredients' => '2 pounds ground beef
1 egg, beaten
¾ cup dry bread crumbs
3 tablespoons evaporated milk
2 tablespoons Worcestershire sauce
⅛ teaspoon cayenne pepper
2 cloves garlic, minced', 'preparation' => ' Step 1
Preheat grill for high heat.
 Step 2
In a large bowl, mix the ground beef, egg, bread crumbs, evaporated milk, Worcestershire sauce, cayenne pepper, and garlic using your hands. Form the mixture into 8 hamburger patties.
 Step 3
Lightly oil the grill grate. Grill patties 5 minutes per side, or until well done.'));
        
        Recipe::create(array('id' => 9, 'title' => 'Grilled Steak Salad with Asian Dressing', 'user_id' => 1, 'description' => 'BBQ steak salad with a sesame-rice vinegar dressing.', 'prep' => '30 min', 'cook' => '15 min', 'difficulty' => 'Medium', 'serves' => 4, 'ingredients' => '2 (12 ounce) rib eye steak
2 tablespoons soy sauce
2 teaspoons Montreal steak seasoning, or to taste
1 lemon, juiced
1/4 cup rice vinegar
1/4 cup olive oil
1/4 cup white sugar
1 teaspoon sesame oil
1/2 teaspoon garlic powder
4 pinches red pepper flakes
20 leaves romaine lettuce, torn into bite-size pieces
1 large English cucumber, cubed
2 avocado - peeled, pitted, and diced
2 tomato, cut into wedges
2 carrot, grated
8 thin slices red onion
1/4 cup and 2 tablespoons toasted sesame seeds', 'preparation' => ' Step 1
Season both side of the rib eye steak with soy sauce and steak seasoning. Cover and refrigerate at least 1 hour to overnight.
 Step 2
Preheat an outdoor grill for medium-high heat and lightly oil the grate.
 Step 3
Grill steak on preheated grill until firm, reddish-pink, and juicy in the center, about 6 minutes per side. An instant-read thermometer inserted into the center should read 130 degrees F (54 degrees C). Transfer steak to a platter, sprinkle with lemon juice, and cover loosely with aluminum foil. Allow meat to rest for about 10 minutes, then cut into strips.
 Step 4
Whisk rice vinegar, olive oil, sugar, sesame oil, garlic powder, and red pepper flakes together in a small bowl. Combine lettuce, cucumber, avocado, tomato, carrot, red onion, and steak strips in a large bowl. Pour rice vinegar dressing over salad and toss to coat. Sprinkle with sesame seeds to serve.'));
    }
}
