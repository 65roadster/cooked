rsync -arv --delete -e ssh /home/ray/data/recipes/ rcrampton@teamhokies.com:/home/rcrampton/teamhokies.com/recipes
