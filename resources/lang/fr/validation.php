<?php

return array (
  'accepted' => 'Le :attribute doit être accepté.',
  'active_url' => 'Le :attribute n\'est pas une URL valide',
  'after' => 'Le :attribute doit être une date postérieure à :date.',
  'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
  'alpha' => 'Le :attribute ne peut contenir que des lettres.',
  'alpha_dash' => 'Le :attribute ne peut contenir que des lettres, des chiffres, des tirets et des traits de soulignement.',
  'alpha_num' => 'Le :attribute ne peut contenir que des lettres et des chiffres.',
  'array' => 'Le :attribute doit être un tableau.',
  'attributes' => 
  array (
  ),
  'before' => 'Le :attribute doit être une date antérieure à :date.',
  'before_or_equal' => 'Le :attribute doit être une date antérieure ou égale à :date.',
  'between' => 
  array (
    'array' => 'Le :attribute doit avoir entre :min et :max éléments.',
    'file' => 'Le :attribute doit être compris entre :min et :max kilobytes.',
    'numeric' => 'Le :attribute doit être compris entre :min et :max.',
    'string' => 'Le :attribute doit être compris entre :min et :max caractères.',
  ),
  'boolean' => 'Le champ :attribute doit être vrai ou faux.',
  'confirmed' => 'La confirmation :attribute ne correspond pas.',
  'custom' => 
  array (
    'address_id' => 
    array (
      'required' => 'Veuillez entrer une adresse de livraison',
    ),
    'dinein_table_id' => 
    array (
      'required' => 'Veuillez sélectionner votre table',
    ),
    'general_payment_error_action' => 
    array (
      'required' => 'La tentative de paiement a échoué. Si vous êtes administrateur système, veuillez vérifier le problème dans le fournisseur de paiement.',
    ),
    'link_payment_error_action' => 
    array (
      'required' => 'Mode de paiement basé sur le lien introuvable',
    ),
    'mollie_error_action' => 
    array (
      'required' => 'Erreur lors de l\'obtention du lien de paiement.',
    ),
    'order_price' => 
    array (
      'min' => 'Le minimum de commande est :min. Veuillez ajouter quelques articles supplémentaires dans le panier',
    ),
    'paypal_payment_approval_missing' => 
    array (
      'required' => 'Nous n\'avons pas pu obtenir le lien de paiement paypal.',
    ),
    'paypal_payment_error_action' => 
    array (
      'required' => 'La tentative de paiement a échoué car une action supplémentaire est requise avant de pouvoir la terminer',
    ),
    'paystack_error_action' => 
    array (
      'required' => 'Erreur de communication avec PayStack',
    ),
    'stripe_payment_error_action' => 
    array (
      'required' => 'La tentative de paiement a échoué car une action supplémentaire est requise avant de pouvoir la terminer',
    ),
    'stripe_payment_failure' => 
    array (
      'required' => 'La tentative de paiement a échoué pour diverses autres raisons, telles que le manque de fonds disponibles. Veuillez vérifier les données que vous avez fournies.',
    ),
  ),
  'date' => 'Le :attribute n\'est pas une date valide.',
  'date_equals' => 'Le :attribute doit être une date égale à :date.',
  'date_format' => 'Le :attribute ne correspond pas au format :format.',
  'different' => 'Le :attribute et :other doivent être différents.',
  'digits' => 'Le :attribute doit être :digits chiffres.',
  'digits_between' => 'Le :attribute doit être compris entre :min et :max digits.',
  'dimensions' => 'Le :attribute a des dimensions d\'image non valides.',
  'distinct' => 'Le champ :attribute a une valeur en double',
  'email' => 'Le :attribute doit être une adresse e-mail valide.',
  'ends_with' => 'Le :attribute doit se terminer par l\'un des éléments suivants : :values.',
  'exists' => 'Le :attribut sélectionné n\'est pas valide.',
  'file' => 'Le :attribute doit être un fichier.',
  'filled' => 'Le champ :attribute doit avoir une valeur.',
  'gt' => 
  array (
    'array' => 'Le :attribute doit avoir plus de :value éléments.',
    'file' => 'Le :attribute doit être supérieur à :value kilo-octets.',
    'numeric' => 'Le :attribute doit être supérieur à :value.',
    'string' => 'Le :attribute doit être supérieur aux caractères :value.',
  ),
  'gte' => 
  array (
    'array' => 'Le :attribute doit avoir des éléments :value ou plus.',
    'file' => 'Le :attribute doit être supérieur ou égal à :value kilo-octets.',
    'numeric' => 'Le :attribute doit être supérieur ou égal à :value.',
    'string' => 'Le :attribute doit être supérieur ou égal aux caractères :value.',
  ),
  'image' => 'Le :attribute doit être une image',
  'in' => 'Le :attribut sélectionné n\'est pas valide.',
  'in_array' => 'Le champ :attribute n\'existe pas dans :other.',
  'integer' => 'Le :attribute doit être un entier',
  'ip' => 'Le :attribute doit être une adresse IP valide.',
  'ipv4' => 'Le :attribute doit être une adresse IPv4 valide.',
  'ipv6' => 'Le :attribute doit être une adresse IPv6 valide.',
  'json' => 'Le :attribute doit être une chaîne JSON valide.',
  'lt' => 
  array (
    'array' => 'Le :attribute doit avoir moins d\'éléments :value.',
    'file' => 'Le :attribute doit être inférieur à :value kilo-octets.',
    'numeric' => 'Le :attribute doit être inférieur à :value.',
    'string' => 'Le :attribute doit être inférieur à :value caractères.',
  ),
  'lte' => 
  array (
    'array' => 'Le :attribute ne doit pas avoir plus de :value elements',
    'file' => 'Le :attribute doit être inférieur ou égal à :value kilo-octets.',
    'numeric' => 'Le :attribute doit être inférieur ou égal à :value.',
    'string' => 'Le :attribute doit être inférieur ou égal à :value caractères.',
  ),
  'max' => 
  array (
    'array' => 'Le :attribute ne peut pas avoir plus de :max éléments.',
    'file' => 'Le :attribute ne peut pas être supérieur à :max kilo-octets.',
    'numeric' => 'Le :attribute ne peut pas être supérieur à :max.',
    'string' => 'Le :attribute ne peut pas être supérieur à :max caractères.',
  ),
  'mimes' => 'Le :attribute doit être un fichier de type : :values.',
  'mimetypes' => 'Le :attribute doit être un fichier de type : :values.',
  'min' => 
  array (
    'array' => 'Le :attribute doit avoir au moins :min éléments.',
    'file' => 'Le :attribute doit être d\'au moins :min kilo-octets.',
    'numeric' => 'Le :attribute doit être au moins :min.',
    'string' => 'Le :attribute doit contenir au moins :min caractères.',
  ),
  'multiple_of' => 'Le :attribute doit être un multiple de :value',
  'not_in' => 'Le :attribute sélectionné n\'est pas valide.',
  'not_regex' => 'Le format :attribute n\'est pas valide.',
  'numeric' => 'Le :attribute doit être un nombre.',
  'password' => 'Le mot de passe est incorrect.',
  'present' => 'Le champ :attribute doit être présent.',
  'regex' => 'Le format :attribute n\'est pas valide.',
  'required' => 'Le champ :attribute est obligatoire.',
  'required_if' => 'Le champ :attribute est obligatoire lorsque :other vaut :value.',
  'required_unless' => 'Le champ :attribute est obligatoire sauf si :other est dans :values.',
  'required_with' => 'Le champ :attribute est obligatoire lorsque :values ​​est présent.',
  'required_with_all' => 'Le champ :attribute est obligatoire lorsque :values ​​sont présentes.',
  'required_without' => 'Le champ :attribute est obligatoire lorsque :values ​​n\'est pas présent.',
  'required_without_all' => 'Le champ :attribute est obligatoire lorsqu\'aucune des valeurs :values ​​n\'est présente.',
  'same' => 'Les :attribute et :other doivent correspondre.',
  'size' => 
  array (
    'array' => 'Le :attribute doit contenir des éléments :size.',
    'file' => 'Le :attribute doit être :size kilo-octets.',
    'numeric' => 'Le :attribute doit être :size.',
    'string' => 'Le :attribute doit être :size caractères.',
  ),
  'starts_with' => 'Le :attribute doit commencer par l\'un des éléments suivants : :values.',
  'string' => 'Le :attribute doit être une chaîne',
  'timezone' => 'Le :attribute doit être une zone valide.',
  'unique' => 'Le :attribute a déjà été pris',
  'uploaded' => 'Le :attribute n\'a pas pu être téléchargé.',
  'url' => 'Le format :attribute n\'est pas valide.',
  'uuid' => 'Le :attribute doit être un UUID valide.',
);
