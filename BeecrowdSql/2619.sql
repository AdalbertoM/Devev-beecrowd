select products.name, providers.name, products.price
from categories inner join products  on
products.id_categories = categories.id inner join
providers on products.id_providers = providers.id
where categories.name = 'Super Luxury' and
products.price > 1000;