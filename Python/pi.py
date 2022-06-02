#!/usr/bin/env python3
name = str(input('Indiquez le nom du produit: '))
price = float(input('Indiquez son prix: '))
message = "Produit %s créé au prix de %s € HT" % (name, price)
print(message)