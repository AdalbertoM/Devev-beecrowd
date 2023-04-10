SELECT products.name, providers.name, categories.name
from categories inner join products on
products.id_categories = categories.id inner join
providers on products.id_providers = providers.id
where categories.name = 'Imported' and
providers.name = 'Sansul SA';