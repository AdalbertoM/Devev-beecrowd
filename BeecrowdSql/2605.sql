select products.name, providers.name from products, providers
where products.id_providers = providers.id and 
products.id_categories = 6;