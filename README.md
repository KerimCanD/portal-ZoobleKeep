# portal-ZoobleKeep
## Kurulum

### 1- Kurulumda ilk yapmanız gereken işlem composer.json dosyasında "repositories" kısmına eklemektir.

{
        "type": "vcs",
        "url": "https://github.com/KerimCanD/portal-ZoobleKeep.git"
    }

### 2-Devamında ise portal/backend/config/main.php, portal/frontend/config/main.php, portal/api/config/main.php dosyalarındaki modules bölümüne kendi modülünüzü eklemelisiniz.
'ZoobleKeep' => [
        'class' => 'kouosl\ZoobleKeep\Module',
    ]

### 3- Devamında ise vagrant ssh'a bağlanıp "composer update" komutunu vermemiz gerekiyor.

### 4-) Migration dosyası uplanarak veri tabanına modülde kullandığımız tablolar eklenir. Bunun için vagrant ssh da "php yii migrate --migrationPath=@vendor/kouosl/portal-odev/migrations --interactive=0" komutu çalıştırılır.

