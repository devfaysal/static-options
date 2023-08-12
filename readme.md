## Helper functions that return the array of static options for Select
Do not write or copy/paste in every project. Just require the package and use the global function

For Division/District/Upazila data of Bangladesh, check [devfaysal/laravel-bangladesh-geocode](https://github.com/devfaysal/laravel-bangladesh-geocode)

```bash
composer require devfaysal/static-options
```

### Blood Group 
`bloodGroupOptions()`
```php
[
    'A+'    => 'A+',
    'B+'    => 'B+',
    'AB+'   => 'AB+',
    'O+'    => 'O+',
    'A-'    => 'A-',
    'B-'    => 'B-',
    'AB-'   => 'AB-',
    'O-'    => 'O-'
]
```

### Religion
`religionOptions()`
```php
[
    'Islam'         => 'Islam',
    'Christianity'  => 'Christianity',
    'Hinduism'      => 'Hinduism',
    'Buddhism'      => 'Buddhism',
    'Other'         => 'Other'
]
```

### Gender
`genderOptions()`
```php
[
    'Male'  => 'Male',
    'Female'=> 'Female',
    'Other' => 'Other'
]
```
