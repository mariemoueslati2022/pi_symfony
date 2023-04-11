<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('az', array (
  'validators' => 
  array (
    'This value should be false.' => 'Bu dəyər false olmalıdır.',
    'This value should be true.' => 'Bu dəyər true olmalıdır.',
    'This value should be of type {{ type }}.' => 'Bu dəyərin tipi {{ type }} olmalıdır.',
    'This value should be blank.' => 'Bu dəyər boş olmalıdır.',
    'The value you selected is not a valid choice.' => 'Seçdiyiniz dəyər düzgün bir seçim değil.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Ən az {{ limit }} seçim qeyd edilməlidir.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Ən çox {{ limit }} seçim qeyd edilməlidir.',
    'One or more of the given values is invalid.' => 'Təqdim edilən dəyərlərdən bir və ya bir neçəsi yanlışdır.',
    'This field was not expected.' => 'Bu sahə gözlənilmirdi.',
    'This field is missing.' => 'Bu sahə əksikdir.',
    'This value is not a valid date.' => 'Bu dəyər düzgün bir tarix deyil.',
    'This value is not a valid datetime.' => 'Bu dəyər düzgün bir tarixsaat deyil.',
    'This value is not a valid email address.' => 'Bu dəyər düzgün bir e-poçt adresi deyil.',
    'The file could not be found.' => 'Fayl tapılmadı.',
    'The file is not readable.' => 'Fayl oxunabilən deyil.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fayl çox böyükdür ({{ size }} {{ suffix }}). İcazə verilən maksimum fayl ölçüsü {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Faylın mime tipi yanlışdr ({{ type }}). İcazə verilən mime tipləri {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Bu dəyər {{ limit }} və ya altında olmalıdır.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Bu dəyər çox uzundur. {{ limit }} və ya daha az simvol olmalıdır.',
    'This value should be {{ limit }} or more.' => 'Bu dəyər {{ limit }} veya daha fazla olmalıdır.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Bu dəyər çox qısadır. {{ limit }} və ya daha çox simvol olmalıdır.',
    'This value should not be blank.' => 'Bu dəyər boş olmamalıdır.',
    'This value should not be null.' => 'Bu dəyər boş olmamalıdır.',
    'This value should be null.' => 'Bu dəyər boş olmamalıdır.',
    'This value is not valid.' => 'Bu dəyər doğru deyil.',
    'This value is not a valid time.' => 'Bu dəyər doğru bir saat deyil.',
    'This value is not a valid URL.' => 'Bu dəyər doğru bir URL değil.',
    'The two values should be equal.' => 'İki dəyər eyni olmalıdır.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fayl çox böyükdür. İcazə verilən ən böyük fayl ölçüsü {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Fayl çox böyükdür.',
    'The file could not be uploaded.' => 'Fayl yüklənəbilmir.',
    'This value should be a valid number.' => 'Bu dəyər rəqəm olmalıdır.',
    'This file is not a valid image.' => 'Bu fayl düzgün bir şəkil deyil.',
    'This is not a valid IP address.' => 'Bu düzgün bir IP adresi deyil.',
    'This value is not a valid language.' => 'Bu dəyər düzgün bir dil deyil.',
    'This value is not a valid locale.' => 'Bu dəyər düzgün bir dil deyil.',
    'This value is not a valid country.' => 'Bu dəyər düzgün bir ölkə deyil.',
    'This value is already used.' => 'Bu dəyər hal-hazırda istifadədədir.',
    'The size of the image could not be detected.' => 'Şəklin ölçüsü hesablana bilmir.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Şəklin genişliyi çox böyükdür ({{ width }}px). İcazə verilən ən böyük genişlik {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Şəklin genişliyi çox kiçikdir ({{ width }}px). Ən az {{ min_width }}px olmalıdır.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Şəklin yüksəkliyi çox böyükdür ({{ height }}px). İcazə verilən ən böyük yüksəklik {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Şəklin yüksəkliyi çox kiçikdir ({{ height }}px). Ən az {{ min_height }}px olmalıdır.',
    'This value should be the user\'s current password.' => 'Bu dəyər istifadəçinin hazırkı parolu olmalıdır.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Bu dəyər tam olaraq {{ limit }} simvol olmaldır.',
    'The file was only partially uploaded.' => 'Fayl qismən yükləndi.',
    'No file was uploaded.' => 'Fayl yüklənmədi.',
    'No temporary folder was configured in php.ini.' => 'php.ini\'də müvəqqəti qovluq quraşdırılmayıb.',
    'Cannot write temporary file to disk.' => 'Müvəqqəti fayl diskə yazıla bilmir.',
    'A PHP extension caused the upload to fail.' => 'Bir PHP əlavəsi faylın yüklənməsinə mane oldu.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Bu kolleksiyada {{ limit }} və ya daha çox element olmalıdır.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Bu kolleksiyada {{ limit }} və ya daha az element olmalıdır.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Bu kolleksiyada tam olaraq {{ limit }} element olmalıdır.',
    'Invalid card number.' => 'Yanlış kart nömrəsi.',
    'Unsupported card type or invalid card number.' => 'Dəstəklənməyən kart tipi və ya yanlış kart nömrəsi.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Bu dəyər doğru bir Beynəlxalq Bank Hesap Nömrəsi (IBAN) deyil.',
    'This value is not a valid ISBN-10.' => 'Bu dəyər doğru bir ISBN-10 deyil.',
    'This value is not a valid ISBN-13.' => 'Bu dəyər doğru bir ISBN-13 deyil.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Bu dəyər doğru bir ISBN-10 və ya ISBN-13 deyil.',
    'This value is not a valid ISSN.' => 'Bu dəyər doğru bir ISSN deyil.',
    'This value is not a valid currency.' => 'Bu dəyər doğru bir valyuta deyil.',
    'This value should be equal to {{ compared_value }}.' => 'Bu dəyər {{ compared_value }} ilə bərabər olmalıdır.',
    'This value should be greater than {{ compared_value }}.' => 'Bu dəyər {{ compared_value }} dəyərindən büyük olmalıdır.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Bu dəyər {{ compared_value }} ilə bərabər və ya daha böyük olmaldır.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Bu dəyər {{ compared_value_type }} {{ compared_value }} ilə eyni olmalıdır.',
    'This value should be less than {{ compared_value }}.' => 'Bu dəyər {{ compared_value }} dəyərindən kiçik olmalıdır.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Bu dəyər {{ compared_value }} dəyərindən kiçik və ya bərabər olmalıdır.',
    'This value should not be equal to {{ compared_value }}.' => 'Bu değer {{ compared_value }} ile eşit olmamalıdır.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Bu dəyər {{ compared_value_type }} {{ compared_value }} ilə eyni olmamalıdır.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Şəkil nisbəti çox büyükdür ({{ ratio }}). İcazə verilən maksimum nisbət: {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Şəkil nisbəti çox balacadır ({{ ratio }}). İcazə verilən minimum nisbət: {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Şəkil kvadratdır ({{ width }}x{{ height }}px). Kvadrat şəkillərə icazə verilmir.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Şəkil albom rejimindədir ({{ width }}x{{ height }}px). Albom rejimli şəkillərə icazə verilmir.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Şəkil portret rejimindədir ({{ width }}x{{ height }}px). Portret rejimli şəkillərə icazə verilmir.',
    'An empty file is not allowed.' => 'Boş fayla icazə verilmir.',
    'The host could not be resolved.' => 'Ünvan tapılmadı.',
    'This value does not match the expected {{ charset }} charset.' => 'Bu dəyər gözlənilən {{ charset }} simvol cədvəli ilə uyğun gəlmir.',
    'This is not a valid Business Identifier Code (BIC).' => 'Bu dəyər doğru bir Biznes Təyinedici Kodu (BIC) deyil.',
    'Error' => 'Xəta',
    'This is not a valid UUID.' => 'Bu dəyər doğru bir UUID deyil.',
    'This value should be a multiple of {{ compared_value }}.' => 'Bu dəyər {{ compare_value }} dəyərinin bölənlərindən biri olmalıdır.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Bu Biznes Təyinedici Kodu (BIC) {{ iban }} IBAN kodu ilə əlaqəli deyil.',
    'This value should be valid JSON.' => 'Bu dəyər doğru bir JSON olmalıdır.',
    'This collection should contain only unique elements.' => 'Bu kolleksiyada sadəcə unikal elementlər olmalıdır.',
    'This value should be positive.' => 'Bu dəyər müsbət olmalıdır.',
    'This value should be either positive or zero.' => 'Bu dəyər müsbət və ya sıfır olmalıdır.',
    'This value should be negative.' => 'Bu dəyər mənfi olmaldır.',
    'This value should be either negative or zero.' => 'Bu dəyər mənfi və ya sıfır olmaldır.',
    'This value is not a valid timezone.' => 'Bu dəyər doğru bir zaman zolağı deyil.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Bu parol data oğurluğunda tapıldığı üçün işlədilməməlidir. Zəhmət olmasa, başqa parol seçin.',
    'This value should be between {{ min }} and {{ max }}.' => 'Bu dəyər {{ min }} və {{ max }} arasında olmaldır.',
    'This value is not a valid hostname.' => 'Bu dəyər doğru bir host adı deyil.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Bu kolleksiyadakı elementlerin sayı {{ compared_value }} tam bölünəni olmalıdır.',
    'This value should satisfy at least one of the following constraints:' => 'Bu dəyər aşağıdakı məcburiyyətlərdən birini qarşılamalıdır:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Bu kolleksiyadakı hər element öz məcburiyyətlərini qarşılamalıdır.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Bu dəyər doğru bir Qiymətli Kağızın Beynəlxalq İdentifikasiya Kodu (ISIN) deyil.',
    'This value should be a valid expression.' => 'Bu dəyər etibarlı ifadə olmalıdır.',
    'This value is not a valid CSS color.' => 'Bu dəyər etibarlı CSS rəngi deyil.',
    'This value is not a valid CIDR notation.' => 'Bu dəyər etibarlı CIDR notasiyası deyil.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'Şəbəkə maskasının dəyəri {{ min }} və {{ max }} arasında olmalıdır.',
    'This form should not contain extra fields.' => 'Bu formada əlavə sahə olmamalıdır.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Yüklənən fayl çox böyükdür. Lütfən daha kiçik fayl yükləyin.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF nişanı yanlışdır. Lütfen formanı yenidən göndərin.',
    'This value is not a valid HTML5 color.' => 'Bu dəyər doğru bir HTML5 rəngi deyil.',
    'Please enter a valid birthdate.' => 'Zəhmət olmasa doğru bir doğum günü daxil edin.',
    'The selected choice is invalid.' => 'Seçilmiş seçim doğru deyil.',
    'The collection is invalid.' => 'Kolleksiya doğru deyil.',
    'Please select a valid color.' => 'Zəhmət olmasa doğru bir rəng seçin.',
    'Please select a valid country.' => 'Zəhmət olmasa doğru bir ölkə seçin.',
    'Please select a valid currency.' => 'Zəhmət olmasa doğru bir valyuta seçin.',
    'Please choose a valid date interval.' => 'Zəhmət olmasa doğru bir tarix aralığı seçin.',
    'Please enter a valid date and time.' => 'Zəhmət olmasa doğru bir tarix ve saat daxil edin.',
    'Please enter a valid date.' => 'Zəhmət olmasa doğru bir tarix daxil edin.',
    'Please select a valid file.' => 'Zəhmət olmasa doğru bir fayl seçin.',
    'The hidden field is invalid.' => 'Gizli sahə doğru deyil.',
    'Please enter an integer.' => 'Zəhmət olmasa bir tam ədəd daxil edin.',
    'Please select a valid language.' => 'Zəhmət olmasa doğru bir dil seçin.',
    'Please select a valid locale.' => 'Zəhmət olmasa doğru bir yer seçin.',
    'Please enter a valid money amount.' => 'Zəhmət olmasa doğru bir pul miqdarı daxil edin.',
    'Please enter a number.' => 'Zəhmət olmasa doğru bir rəqəm daxil edin.',
    'The password is invalid.' => 'Parol doğru deyil.',
    'Please enter a percentage value.' => 'Zəhmət olmasa doğru bir faiz dəyəri daxil edin.',
    'The values do not match.' => 'Dəyərlər örtüşmür.',
    'Please enter a valid time.' => 'Zəhmət olmasa doğru bir saat daxil edin.',
    'Please select a valid timezone.' => 'Zəhmət olmasa doğru bir saat qurşağı seçin.',
    'Please enter a valid URL.' => 'Zəhmət olmasa doğru bir URL daxil edin.',
    'Please enter a valid search term.' => 'Zəhmət olmasa doğru bir axtarış termini daxil edin.',
    'Please provide a valid phone number.' => 'Zəhmət olmasa doğru bir telefon nömrəsi seçin.',
    'The checkbox has an invalid value.' => 'Seçim qutusunda doğru olmayan dəyər var.',
    'Please enter a valid email address.' => 'Zəhmət olmasa doğru bir e-poçt seçin.',
    'Please select a valid option.' => 'Zəhmət olmasa doğru bir variant seçin.',
    'Please select a valid range.' => 'Zəhmət olmasa doğru bir aralıq seçin.',
    'Please enter a valid week.' => 'Zəhmət olmasa doğru bir həftə seçin.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Doğrulama istisnası baş verdi.',
    'Authentication credentials could not be found.' => 'Doğrulama məlumatları tapılmadı.',
    'Authentication request could not be processed due to a system problem.' => 'Sistem xətası səbəbilə doğrulama istəyi emal edilə bilmədi.',
    'Invalid credentials.' => 'Yanlış məlumat.',
    'Cookie has already been used by someone else.' => 'Kuki başqası tərəfindən istifadə edilib.',
    'Not privileged to request the resource.' => 'Resurs istəyi üçün imtiyaz yoxdur.',
    'Invalid CSRF token.' => 'Yanlış CSRF nişanı.',
    'No authentication provider found to support the authentication token.' => 'Doğrulama nişanını dəstəkləyəcək provayder tapılmadı.',
    'No session available, it either timed out or cookies are not enabled.' => 'Uyğun seans yoxdur, vaxtı keçib və ya kuki aktiv deyil.',
    'No token could be found.' => 'Nişan tapılmadı.',
    'Username could not be found.' => 'İstifadəçi adı tapılmadı.',
    'Account has expired.' => 'Hesabın istifadə müddəti bitib.',
    'Credentials have expired.' => 'Məlumatların istifadə müddəti bitib.',
    'Account is disabled.' => 'Hesab qeyri-aktiv edilib.',
    'Account is locked.' => 'Hesab kilitlənib.',
    'Too many failed login attempts, please try again later.' => 'Çoxlu uğursuz giriş təşəbbüsü, zəhmət olmasa daha sonra yeniden yoxlayın.',
    'Invalid or expired login link.' => 'Yanlış və ya müddəti keçmiş giriş keçidi.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Həddindən artıq uğursuz giriş cəhdi, lütfən %minutes% dəqiqə ərzində yenidən yoxlayın.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Həddindən artıq uğursuz giriş cəhdi, lütfən %minutes% dəqiqə ərzində yenidən yoxlayın.',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This value should be between {{ min }} and {{ max }}.' => 'This value should be between {{ min }} and {{ max }}.',
    'This value is not a valid hostname.' => 'This value is not a valid hostname.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'The number of elements in this collection should be a multiple of {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'This value should satisfy at least one of the following constraints:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Each element of this collection should satisfy its own set of constraints.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'This value is not a valid International Securities Identification Number (ISIN).',
    'This value should be a valid expression.' => 'This value should be a valid expression.',
    'This value is not a valid CSS color.' => 'This value is not a valid CSS color.',
    'This value is not a valid CIDR notation.' => 'This value is not a valid CIDR notation.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'The value of the netmask should be between {{ min }} and {{ max }}.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'This value is not a valid HTML5 color.' => 'This value is not a valid HTML5 color.',
    'Please enter a valid birthdate.' => 'Please enter a valid birthdate.',
    'The selected choice is invalid.' => 'The selected choice is invalid.',
    'The collection is invalid.' => 'The collection is invalid.',
    'Please select a valid color.' => 'Please select a valid color.',
    'Please select a valid country.' => 'Please select a valid country.',
    'Please select a valid currency.' => 'Please select a valid currency.',
    'Please choose a valid date interval.' => 'Please choose a valid date interval.',
    'Please enter a valid date and time.' => 'Please enter a valid date and time.',
    'Please enter a valid date.' => 'Please enter a valid date.',
    'Please select a valid file.' => 'Please select a valid file.',
    'The hidden field is invalid.' => 'The hidden field is invalid.',
    'Please enter an integer.' => 'Please enter an integer.',
    'Please select a valid language.' => 'Please select a valid language.',
    'Please select a valid locale.' => 'Please select a valid locale.',
    'Please enter a valid money amount.' => 'Please enter a valid money amount.',
    'Please enter a number.' => 'Please enter a number.',
    'The password is invalid.' => 'The password is invalid.',
    'Please enter a percentage value.' => 'Please enter a percentage value.',
    'The values do not match.' => 'The values do not match.',
    'Please enter a valid time.' => 'Please enter a valid time.',
    'Please select a valid timezone.' => 'Please select a valid timezone.',
    'Please enter a valid URL.' => 'Please enter a valid URL.',
    'Please enter a valid search term.' => 'Please enter a valid search term.',
    'Please provide a valid phone number.' => 'Please provide a valid phone number.',
    'The checkbox has an invalid value.' => 'The checkbox has an invalid value.',
    'Please enter a valid email address.' => 'Please enter a valid email address.',
    'Please select a valid option.' => 'Please select a valid option.',
    'Please select a valid range.' => 'Please select a valid range.',
    'Please enter a valid week.' => 'Please enter a valid week.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
    'Too many failed login attempts, please try again later.' => 'Too many failed login attempts, please try again later.',
    'Invalid or expired login link.' => 'Invalid or expired login link.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Too many failed login attempts, please try again in %minutes% minute.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Too many failed login attempts, please try again in %minutes% minutes.',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Previous',
    'label_next' => 'Next',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
