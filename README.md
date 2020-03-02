query crud:
php artisan crud:generate Gay --fields='title#string; content#text; category#select#options={"technology": "Technology", "tips": "Tips", "health": "Health"}' --view-path=comum --controller-namespace=Comum/Caio --route-group=comum --form-helper=html --soft-deletes=yes --model-namespace="Models"

https://github.com/appzcoder/crud-generator/blob/master/doc/fields.md