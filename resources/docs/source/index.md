---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://moveme.test/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_f7b7ea397f8939c8bb93e6cab64603ce -->
## Display Swagger API page.

> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/api/documentation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/api/documentation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET api/documentation`


<!-- END_f7b7ea397f8939c8bb93e6cab64603ce -->

<!-- START_1ead214f30a5e235e7140eb2aaa29eee -->
## Dump api-docs content endpoint. Supports dumping a json, or yaml file.

> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/docs/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/docs/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "swagger": "2.0",
    "info": {
        "title": "L5 Swagger API",
        "description": "L5 Swagger API description",
        "contact": {
            "email": "your-email@domain.com"
        },
        "version": "1.0.0"
    },
    "host": "movemeapi.test",
    "basePath": "",
    "schemes": [
        "http",
        "https"
    ],
    "paths": {
        "\/api\/testing\/{mytest}": {
            "get": {
                "summary": "Get Testing",
                "operationId": "testing",
                "parameters": [
                    {
                        "name": "mytest",
                        "in": "path",
                        "required": true,
                        "type": "string"
                    }
                ],
                "responses": {
                    "200": {
                        "description": "successful operation"
                    },
                    "406": {
                        "description": "not acceptable"
                    },
                    "500": {
                        "description": "internal server error"
                    }
                }
            }
        }
    },
    "definitions": {},
    "securityDefinitions": {
        "bearer_token": {
            "type": "apiKey",
            "description": "Enter token in format (Bearer <token>)",
            "name": "Authorization",
            "in": "header"
        }
    }
}
```

### HTTP Request
`GET docs/{jsonFile?}`

`POST docs/{jsonFile?}`

`PUT docs/{jsonFile?}`

`PATCH docs/{jsonFile?}`

`DELETE docs/{jsonFile?}`

`OPTIONS docs/{jsonFile?}`


<!-- END_1ead214f30a5e235e7140eb2aaa29eee -->

<!-- START_1a23c1337818a4de9e417863aebaca33 -->
## docs/asset/{asset}
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/docs/asset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/docs/asset/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "(1) - this L5 Swagger asset is not allowed"
}
```

### HTTP Request
`GET docs/asset/{asset}`


<!-- END_1a23c1337818a4de9e417863aebaca33 -->

<!-- START_a2c4ea37605c6d2e3c93b7269030af0a -->
## Display Oauth2 callback pages.

> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/api/oauth2-callback" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/api/oauth2-callback"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET api/oauth2-callback`


<!-- END_a2c4ea37605c6d2e3c93b7269030af0a -->

<!-- START_e4c20ab9c4727524c3daa74a53e56200 -->
## Display the form to gather additional payment verification for the given payment.

> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/stripe/payment/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/stripe/payment/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET stripe/payment/{id}`


<!-- END_e4c20ab9c4727524c3daa74a53e56200 -->

<!-- START_15ae8ca17c014b55868e68dc48ee5047 -->
## Handle a Stripe webhook call.

> Example request:

```bash
curl -X POST \
    "http://moveme.test/stripe/webhook" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/stripe/webhook"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST stripe/webhook`


<!-- END_15ae8ca17c014b55868e68dc48ee5047 -->

<!-- START_56f0a9e2603f1ee851384158a3a2bc34 -->
## api/venue
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/api/venue" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/api/venue"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1148987,
            "user_id": 0,
            "email": null,
            "venuename": "The Marquis Of Granby",
            "slug": "the-marquis-of-granby",
            "venuetype": "Public Houses",
            "address": "West Street",
            "address2": "",
            "town": "Lancing",
            "county": "West Sussex",
            "postcode": "BN150AP",
            "postalsearch": "BN15",
            "telephone": "01903 231102",
            "latitude": "50.834524",
            "longitude": "-0.3531344",
            "website": "",
            "photo": "venues\/venue-default.png",
            "is_live": 0,
            "created_at": "2020-03-15 18:37:54",
            "updated_at": "2020-10-10 21:45:55"
        },
        {
            "id": 1149078,
            "user_id": 0,
            "email": null,
            "venuename": "The Marine",
            "slug": "the-marine",
            "venuetype": "Public Houses",
            "address": "Selborne Road",
            "address2": "",
            "town": "Littlehampton",
            "county": "West Sussex",
            "postcode": "BN175NN",
            "postalsearch": "BN17",
            "telephone": "01903721476",
            "latitude": "50.8051908",
            "longitude": "-0.5332891",
            "website": "",
            "photo": "venues\/venue-default.png",
            "is_live": 0,
            "created_at": "2020-03-15 18:37:54",
            "updated_at": "2020-04-15 15:08:22"
        },
        {
            "id": 1149079,
            "user_id": 33,
            "email": "themarine@themarine.com",
            "venuename": "The Marine",
            "slug": "the-marine",
            "venuetype": "Public Houses",
            "address": "61 Seaside",
            "address2": "",
            "town": "Eastbourne",
            "county": "East Sussex",
            "postcode": "BN227NE",
            "postalsearch": "BN22",
            "telephone": "01323720464",
            "latitude": "50.7715121",
            "longitude": "0.2952365",
            "website": "",
            "photo": "public\/venues\/photos\/AeegKGFyBYoVndROG1ZlsnBsfP3qXnT3d7FVmcwD.jpeg",
            "is_live": 1,
            "created_at": "2020-03-15 18:37:54",
            "updated_at": "2020-09-21 19:30:31"
        },
        {
            "id": 1149188,
            "user_id": 0,
            "email": null,
            "venuename": "The Mashtun",
            "slug": "the-mashtun",
            "venuetype": "Public Houses",
            "address": "1 Church Street",
            "address2": "",
            "town": "Brighton",
            "county": "East Sussex",
            "postcode": "BN11UE",
            "postalsearch": "BN1",
            "telephone": "01273684951",
            "latitude": "50.82347450",
            "longitude": "-0.13847680",
            "website": "https:\/\/www.mashtun.pub\/",
            "photo": "public\/venues\/photos\/bpHgwKtvMWhvotXeKZUKSV0PXXa8mgk6OTgbuLwb.jpeg",
            "is_live": 1,
            "created_at": "2020-03-15 18:37:54",
            "updated_at": "2020-04-15 13:55:06"
        },
        {
            "id": 1149243,
            "user_id": 0,
            "email": null,
            "venuename": "The Marlborough Hotel",
            "slug": "the-marlborough-hotel",
            "venuetype": "Public Houses",
            "address": "4 Princes Street",
            "address2": "",
            "town": "Brighton",
            "county": "East Sussex",
            "postcode": "BN21RD",
            "postalsearch": "BN2",
            "telephone": "01273 570028",
            "latitude": "50.8223086",
            "longitude": "-0.1359947",
            "website": "",
            "photo": "public\/venues\/photos\/MmqjXeHbD8RjEmTV8o9wFSytxD6Gx4bqgTUpBMYM.jpeg",
            "is_live": 1,
            "created_at": "2020-03-15 18:37:54",
            "updated_at": "2020-04-15 13:57:03"
        },
        {
            "id": 1149305,
            "user_id": 0,
            "email": null,
            "venuename": "The Market Inn",
            "slug": "the-market-inn",
            "venuetype": "Public Houses",
            "address": "1 Market Street",
            "address2": "",
            "town": "Brighton",
            "county": "East Sussex",
            "postcode": "BN11HH",
            "postalsearch": "BN1",
            "telephone": "01273329483",
            "latitude": "50.8214604",
            "longitude": "-0.1397625",
            "website": "",
            "photo": "public\/venues\/photos\/L1igcRRQMtZuDgisF3oLEqymyDjBIUhDFnOzJ0ru.jpeg",
            "is_live": 1,
            "created_at": "2020-03-15 18:37:54",
            "updated_at": "2020-04-15 13:57:54"
        },
        {
            "id": 1149381,
            "user_id": 0,
            "email": null,
            "venuename": "The Marine Tavern",
            "slug": "the-marine-tavern",
            "venuetype": "Public Houses",
            "address": "13 Broad Street",
            "address2": "",
            "town": "Brighton",
            "county": "East Sussex",
            "postcode": "BN21TJ",
            "postalsearch": "BN2",
            "telephone": "01273681284",
            "latitude": "50.8204832",
            "longitude": "-0.134889",
            "website": "",
            "photo": "public\/venues\/photos\/Q7WFVSHUSdCAtKqWvtX4tSazs8FFX53yX3CLUStV.jpeg",
            "is_live": 1,
            "created_at": "2020-03-15 18:37:54",
            "updated_at": "2020-04-15 13:58:48"
        },
        {
            "id": 1149568,
            "user_id": 0,
            "email": null,
            "venuename": "White Star Inn",
            "slug": "white-star-inn",
            "venuetype": "Public Houses",
            "address": "36 Lansdown Place",
            "address2": "",
            "town": "Lewes",
            "county": "East Sussex",
            "postcode": "BN72JU",
            "postalsearch": "BN7",
            "telephone": "01273480623",
            "latitude": "50.871791",
            "longitude": "0.0118211",
            "website": "",
            "photo": "public\/venues\/photos\/TdP3JMrC1erCTfhM7iU0MAXkLHnaZgkQxZdP47nG.jpeg",
            "is_live": 1,
            "created_at": "2020-03-15 18:37:54",
            "updated_at": "2020-04-15 14:00:00"
        },
        {
            "id": 1149696,
            "user_id": 0,
            "email": null,
            "venuename": "Leone D'Oori",
            "slug": "leone-d'oori",
            "venuetype": "Public Houses",
            "address": "76 Preston Street",
            "address2": "",
            "town": "Brighton",
            "county": "East Sussex",
            "postcode": "BN12HG",
            "postalsearch": "BN1",
            "telephone": "01273722214",
            "latitude": "50.8227313",
            "longitude": "-0.1512552",
            "website": "",
            "photo": "venues\/venue-default.png",
            "is_live": 0,
            "created_at": "2020-03-15 18:37:54",
            "updated_at": "2020-04-15 15:08:59"
        },
        {
            "id": 1149715,
            "user_id": 0,
            "email": null,
            "venuename": "Mrs Fitzherberts",
            "slug": "mrs-fitzherberts",
            "venuetype": "Public Houses",
            "address": "25 New Road",
            "address2": "",
            "town": "Brighton",
            "county": "East Sussex",
            "postcode": "BN11UG",
            "postalsearch": "BN1",
            "telephone": "01273682401",
            "latitude": "50.8237068",
            "longitude": "-0.1390769",
            "website": "www.fitzherberts.com",
            "photo": "public\/venues\/photos\/2t7glHspAFKRczHJIGBqi70bbsEkrxpX3OpDYsf7.jpeg",
            "is_live": 1,
            "created_at": "2020-03-15 18:37:54",
            "updated_at": "2020-04-15 14:03:50"
        },
        {
            "id": 1149717,
            "user_id": 30,
            "email": "georgeinn@georgeinn.com",
            "venuename": "St George Inn",
            "slug": "st-george-inn",
            "venuetype": "Public Houses",
            "address": "29 High Street",
            "address2": "",
            "town": "Brighton",
            "county": "East Sussex",
            "postcode": "BN412LH",
            "postalsearch": "BN41",
            "telephone": "01273424933",
            "latitude": "50.8433788",
            "longitude": "-0.2194018",
            "website": "",
            "photo": "public\/venues\/photos\/TebIvhxdKn1wV6uP4ebjkdaBt3vE3gWngSgdthJ3.jpeg",
            "is_live": 1,
            "created_at": "2020-03-15 18:37:54",
            "updated_at": "2020-09-21 18:38:56"
        },
        {
            "id": 1149924,
            "user_id": 0,
            "email": null,
            "venuename": "Albion Tavern",
            "slug": "albion-tavern",
            "venuetype": "Public Houses",
            "address": "13-15 Fishersgate Terrace",
            "address2": "",
            "town": "Brighton",
            "county": "East Sussex",
            "postcode": "BN411PH",
            "postalsearch": "BN41",
            "telephone": "01273411256",
            "latitude": "50.8309695",
            "longitude": "-0.2183261",
            "website": "",
            "photo": "public\/venues\/photos\/RYfXMhU0EawsScYq1SlLpKppOtGMlHxs5YjzD8Ic.jpeg",
            "is_live": 1,
            "created_at": "2020-03-15 18:37:54",
            "updated_at": "2020-09-20 11:29:12"
        },
        {
            "id": 1149969,
            "user_id": 0,
            "email": null,
            "venuename": "Preston Park Tavern",
            "slug": "preston-park-tavern",
            "venuetype": "Public Houses",
            "address": "88 Havelock Road",
            "address2": "",
            "town": "Brighton",
            "county": "East Sussex",
            "postcode": "BN16GF",
            "postalsearch": "BN1",
            "telephone": "01273542271",
            "latitude": "50.8405665",
            "longitude": "-0.1405794",
            "website": "",
            "photo": "public\/venues\/photos\/tfo4BbrrgbT1Mg46NotUXctPEcM98ebjFsUq4ZU6.jpeg",
            "is_live": 1,
            "created_at": "2020-03-15 18:37:54",
            "updated_at": "2020-04-15 14:07:27"
        },
        {
            "id": 1150066,
            "user_id": 0,
            "email": null,
            "venuename": "The Open House",
            "slug": "the-open-house",
            "venuetype": "Public Houses",
            "address": "146 Springfield Road",
            "address2": "",
            "town": "Brighton",
            "county": "East Sussex",
            "postcode": "BN16BZ",
            "postalsearch": "BN1",
            "telephone": "01273550000",
            "latitude": "50.8371361",
            "longitude": "-0.1369521",
            "website": "",
            "photo": "public\/venues\/photos\/OYznVn2ywj12LikjWTTxMp2SlQlDJ3idEZCnpdP4.jpeg",
            "is_live": 1,
            "created_at": "2020-03-15 18:37:54",
            "updated_at": "2020-04-15 14:08:05"
        },
        {
            "id": 1150071,
            "user_id": 0,
            "email": null,
            "venuename": "The Earth & Stars",
            "slug": "the-earth-&-stars",
            "venuetype": "Public Houses",
            "address": "8 Queens Road",
            "address2": "",
            "town": "Brighton",
            "county": "East Sussex",
            "postcode": "BN13WA ",
            "postalsearch": "BN1",
            "telephone": "01273737770",
            "latitude": "50.8246098",
            "longitude": "-0.143258",
            "website": "",
            "photo": "public\/venues\/photos\/Ki0u1mzQPvMNXBQ55AJGiFVh8cNaVsRWiyfAi6dU.jpeg",
            "is_live": 1,
            "created_at": "2020-03-15 18:37:54",
            "updated_at": "2020-04-15 14:08:45"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/venue?page=1",
        "last": "http:\/\/localhost\/api\/venue?page=36",
        "prev": null,
        "next": "http:\/\/localhost\/api\/venue?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 36,
        "path": "http:\/\/localhost\/api\/venue",
        "per_page": 15,
        "to": 15,
        "total": 529
    }
}
```

### HTTP Request
`GET api/venue`


<!-- END_56f0a9e2603f1ee851384158a3a2bc34 -->

<!-- START_190cbe4357f56179064a8caab827d3f2 -->
## api/venue
> Example request:

```bash
curl -X POST \
    "http://moveme.test/api/venue" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/api/venue"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/venue`


<!-- END_190cbe4357f56179064a8caab827d3f2 -->

<!-- START_ee94771b70d97e6ae2f1a42bb08ca085 -->
## api/venue/{venue}
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/api/venue/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/api/venue/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Venue] 1"
}
```

### HTTP Request
`GET api/venue/{venue}`


<!-- END_ee94771b70d97e6ae2f1a42bb08ca085 -->

<!-- START_892be4345d8797ab237ba7869c41c7d8 -->
## api/venue/{venue}
> Example request:

```bash
curl -X PUT \
    "http://moveme.test/api/venue/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/api/venue/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/venue/{venue}`

`PATCH api/venue/{venue}`


<!-- END_892be4345d8797ab237ba7869c41c7d8 -->

<!-- START_097b01f88d51f1c0cf2fe832e6ab5654 -->
## api/venue/{venue}
> Example request:

```bash
curl -X DELETE \
    "http://moveme.test/api/venue/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/api/venue/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/venue/{venue}`


<!-- END_097b01f88d51f1c0cf2fe832e6ab5654 -->

<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## api/login
> Example request:

```bash
curl -X POST \
    "http://moveme.test/api/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/api/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/login`


<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->

<!-- START_d7b7952e7fdddc07c978c9bdaf757acf -->
## api/register
> Example request:

```bash
curl -X POST \
    "http://moveme.test/api/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/api/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/register`


<!-- END_d7b7952e7fdddc07c978c9bdaf757acf -->

<!-- START_61739f3220a224b34228600649230ad1 -->
## api/logout
> Example request:

```bash
curl -X POST \
    "http://moveme.test/api/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/api/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/logout`


<!-- END_61739f3220a224b34228600649230ad1 -->

<!-- START_4227b9e5e54912af051e8dd5472afbce -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/api/tasks" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/api/tasks"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/tasks`


<!-- END_4227b9e5e54912af051e8dd5472afbce -->

<!-- START_77cebd77d4e11b47656dcb7c358c782e -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/api/tasks/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/api/tasks/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/tasks/create`


<!-- END_77cebd77d4e11b47656dcb7c358c782e -->

<!-- START_4da0d9b378428dcc89ced395d4a806e7 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://moveme.test/api/tasks" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/api/tasks"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/tasks`


<!-- END_4da0d9b378428dcc89ced395d4a806e7 -->

<!-- START_5297efa151ae4fd515fec2efd5cb1e9a -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/api/tasks/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/api/tasks/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/tasks/{task}`


<!-- END_5297efa151ae4fd515fec2efd5cb1e9a -->

<!-- START_78152b9305f9bb5329902097d70e99d3 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/api/tasks/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/api/tasks/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/tasks/{task}/edit`


<!-- END_78152b9305f9bb5329902097d70e99d3 -->

<!-- START_546f027bf591f2ef4a8a743f0a59051d -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://moveme.test/api/tasks/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/api/tasks/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/tasks/{task}`

`PATCH api/tasks/{task}`


<!-- END_546f027bf591f2ef4a8a743f0a59051d -->

<!-- START_8b8069956f22facfa8cdc67aece156a8 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://moveme.test/api/tasks/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/api/tasks/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/tasks/{task}`


<!-- END_8b8069956f22facfa8cdc67aece156a8 -->

<!-- START_96ed66d9e6531df9b49e02d84ca5a619 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/api/customers" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/api/customers"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/customers`


<!-- END_96ed66d9e6531df9b49e02d84ca5a619 -->

<!-- START_089467e7ea475fb2aca445b2d23f6e7d -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://moveme.test/api/customers" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/api/customers"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/customers`


<!-- END_089467e7ea475fb2aca445b2d23f6e7d -->

<!-- START_51260396e2d6bf23a957126f249c5ee9 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/api/customers/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/api/customers/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/customers/{customer}`


<!-- END_51260396e2d6bf23a957126f249c5ee9 -->

<!-- START_9c3d56ca438bc61f264f75d157cf51bd -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://moveme.test/api/customers/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/api/customers/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/customers/{customer}`

`PATCH api/customers/{customer}`


<!-- END_9c3d56ca438bc61f264f75d157cf51bd -->

<!-- START_92d13d95887bbc9f105182378dcca720 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://moveme.test/api/customers/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/api/customers/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/customers/{customer}`


<!-- END_92d13d95887bbc9f105182378dcca720 -->

<!-- START_6e5ce4acf3e28e7792c2a6f443fdd941 -->
## api/testing/{mytest}
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/api/testing/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/api/testing/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/testing/{mytest}`


<!-- END_6e5ce4acf3e28e7792c2a6f443fdd941 -->

<!-- START_53be1e9e10a08458929a2e0ea70ddb86 -->
## /
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET /`


<!-- END_53be1e9e10a08458929a2e0ea70ddb86 -->

<!-- START_66e08d3cc8222573018fed49e121e96d -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET login`


<!-- END_66e08d3cc8222573018fed49e121e96d -->

<!-- START_ba35aa39474cb98cfb31829e70eb8b74 -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST \
    "http://moveme.test/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST login`


<!-- END_ba35aa39474cb98cfb31829e70eb8b74 -->

<!-- START_e65925f23b9bc6b93d9356895f29f80c -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST \
    "http://moveme.test/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST logout`


<!-- END_e65925f23b9bc6b93d9356895f29f80c -->

<!-- START_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->
## Show the application registration form.

> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET register`


<!-- END_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->

<!-- START_d7aad7b5ac127700500280d511a3db01 -->
## Handle a registration request for the application.

> Example request:

```bash
curl -X POST \
    "http://moveme.test/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST register`


<!-- END_d7aad7b5ac127700500280d511a3db01 -->

<!-- START_d72797bae6d0b1f3a341ebb1f8900441 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset`


<!-- END_d72797bae6d0b1f3a341ebb1f8900441 -->

<!-- START_feb40f06a93c80d742181b6ffb6b734e -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST \
    "http://moveme.test/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/email`


<!-- END_feb40f06a93c80d742181b6ffb6b734e -->

<!-- START_e1605a6e5ceee9d1aeb7729216635fd7 -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/password/reset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/password/reset/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset/{token}`


<!-- END_e1605a6e5ceee9d1aeb7729216635fd7 -->

<!-- START_cafb407b7a846b31491f97719bb15aef -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://moveme.test/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/reset`


<!-- END_cafb407b7a846b31491f97719bb15aef -->

<!-- START_b77aedc454e9471a35dcb175278ec997 -->
## Display the password confirmation view.

> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET password/confirm`


<!-- END_b77aedc454e9471a35dcb175278ec997 -->

<!-- START_54462d3613f2262e741142161c0e6fea -->
## Confirm the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://moveme.test/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/confirm`


<!-- END_54462d3613f2262e741142161c0e6fea -->

<!-- START_cb859c8e84c35d7133b6a6c8eac253f8 -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/home" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/home"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET home`


<!-- END_cb859c8e84c35d7133b6a6c8eac253f8 -->

<!-- START_d3905b9b0262f05da393514eee95b2ea -->
## company/{id}/{company}
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/company/1/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/company/1/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Company] 1"
}
```

### HTTP Request
`GET company/{id}/{company}`


<!-- END_d3905b9b0262f05da393514eee95b2ea -->

<!-- START_2c83b922439896837b1ea278563ede93 -->
## company/create
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/company/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/company/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET company/create`


<!-- END_2c83b922439896837b1ea278563ede93 -->

<!-- START_885ae7fd77c5fc3955320367f2a83644 -->
## company/create
> Example request:

```bash
curl -X POST \
    "http://moveme.test/company/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/company/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST company/create`


<!-- END_885ae7fd77c5fc3955320367f2a83644 -->

<!-- START_29fda587a4e2c32f615742e5f7396e73 -->
## company/coverphoto
> Example request:

```bash
curl -X POST \
    "http://moveme.test/company/coverphoto" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/company/coverphoto"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST company/coverphoto`


<!-- END_29fda587a4e2c32f615742e5f7396e73 -->

<!-- START_30d495046d565928568c58b2af4731b5 -->
## company/logo
> Example request:

```bash
curl -X POST \
    "http://moveme.test/company/logo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/company/logo"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST company/logo`


<!-- END_30d495046d565928568c58b2af4731b5 -->

<!-- START_d0f00297a5a590089131b75037a3f361 -->
## company/branding
> Example request:

```bash
curl -X POST \
    "http://moveme.test/company/branding" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/company/branding"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST company/branding`


<!-- END_d0f00297a5a590089131b75037a3f361 -->

<!-- START_ef808664c80bc38fd1707571729e14c7 -->
## Invoke the controller method.

> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/register/company" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/register/company"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET register/company`


<!-- END_ef808664c80bc38fd1707571729e14c7 -->

<!-- START_23fa7a44420a89776d537bb69af70b6d -->
## company/register
> Example request:

```bash
curl -X POST \
    "http://moveme.test/company/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/company/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST company/register`


<!-- END_23fa7a44420a89776d537bb69af70b6d -->

<!-- START_9fc0bdc56864baa96b568dd71e6755c6 -->
## Invoke the controller method.

> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/register/landlord" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/register/landlord"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET register/landlord`


<!-- END_9fc0bdc56864baa96b568dd71e6755c6 -->

<!-- START_e6833a73ffb0b9d2940e8849d6ffa4a1 -->
## register/claim
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/register/claim" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/register/claim"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Venue]."
}
```

### HTTP Request
`GET register/claim`


<!-- END_e6833a73ffb0b9d2940e8849d6ffa4a1 -->

<!-- START_1c73c29f8335a0fff34dafb39c2c1167 -->
## landlord/register
> Example request:

```bash
curl -X POST \
    "http://moveme.test/landlord/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/landlord/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST landlord/register`


<!-- END_1c73c29f8335a0fff34dafb39c2c1167 -->

<!-- START_38ac90367d9a366bade5ee15d317c0f7 -->
## venue/events/create
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/venue/events/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/venue/events/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET venue/events/create`


<!-- END_38ac90367d9a366bade5ee15d317c0f7 -->

<!-- START_ae6581004d0fd2594d026e5a9d3474d4 -->
## venue/events/create
> Example request:

```bash
curl -X POST \
    "http://moveme.test/venue/events/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/venue/events/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST venue/events/create`


<!-- END_ae6581004d0fd2594d026e5a9d3474d4 -->

<!-- START_ec380f982745bfcba04810c0c2268e14 -->
## venue/view
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/venue/view" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/venue/view"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET venue/view`


<!-- END_ec380f982745bfcba04810c0c2268e14 -->

<!-- START_3e8d5f4de3e3bd52a4b7ccb199f36ab7 -->
## venue/{id}/{now}/tagin/stats
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/venue/1/1/tagin/stats" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/venue/1/1/tagin/stats"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Venue] 1"
}
```

### HTTP Request
`GET venue/{id}/{now}/tagin/stats`


<!-- END_3e8d5f4de3e3bd52a4b7ccb199f36ab7 -->

<!-- START_e6d6662e3a2a9b9f269a6144cd3382c3 -->
## subscribe
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/subscribe" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/subscribe"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET subscribe`


<!-- END_e6d6662e3a2a9b9f269a6144cd3382c3 -->

<!-- START_7cd1c92845723362129d03191c93e958 -->
## subscribe
> Example request:

```bash
curl -X POST \
    "http://moveme.test/subscribe" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/subscribe"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST subscribe`


<!-- END_7cd1c92845723362129d03191c93e958 -->

<!-- START_7ed318e6b30fcb9d0f2ec4b79bd46b6c -->
## venue/{id}/edit
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/venue/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/venue/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Venue] 1"
}
```

### HTTP Request
`GET venue/{id}/edit`


<!-- END_7ed318e6b30fcb9d0f2ec4b79bd46b6c -->

<!-- START_ac5fa200290ce6a460fe3b0a4e707351 -->
## venue/{id}/edit
> Example request:

```bash
curl -X POST \
    "http://moveme.test/venue/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/venue/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST venue/{id}/edit`


<!-- END_ac5fa200290ce6a460fe3b0a4e707351 -->

<!-- START_10c700a1a5173f595c341e34abcd27fb -->
## user/profile
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/user/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/user/profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET user/profile`


<!-- END_10c700a1a5173f595c341e34abcd27fb -->

<!-- START_1f2aac652dd3d6ba648d6bdc7065d960 -->
## user/profile/create
> Example request:

```bash
curl -X POST \
    "http://moveme.test/user/profile/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/user/profile/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST user/profile/create`


<!-- END_1f2aac652dd3d6ba648d6bdc7065d960 -->

<!-- START_7714c2131ee44a7c0351265c232a7552 -->
## user/coverletter
> Example request:

```bash
curl -X POST \
    "http://moveme.test/user/coverletter" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/user/coverletter"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST user/coverletter`


<!-- END_7714c2131ee44a7c0351265c232a7552 -->

<!-- START_bd95bb8bd0371ac6272779b7eba0f3b3 -->
## user/identification
> Example request:

```bash
curl -X POST \
    "http://moveme.test/user/identification" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/user/identification"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST user/identification`


<!-- END_bd95bb8bd0371ac6272779b7eba0f3b3 -->

<!-- START_210b1af6995fdbf20255888917c7208e -->
## user/avatar
> Example request:

```bash
curl -X POST \
    "http://moveme.test/user/avatar" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/user/avatar"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST user/avatar`


<!-- END_210b1af6995fdbf20255888917c7208e -->

<!-- START_6ff495e092650c9f0e765b17fe9b4ae7 -->
## properties/{id}/edit
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/properties/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/properties/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET properties/{id}/edit`


<!-- END_6ff495e092650c9f0e765b17fe9b4ae7 -->

<!-- START_826676f2989592434e6b036ae5528332 -->
## properties/{id}/edit
> Example request:

```bash
curl -X POST \
    "http://moveme.test/properties/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/properties/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST properties/{id}/edit`


<!-- END_826676f2989592434e6b036ae5528332 -->

<!-- START_606dc10f46efe291772f5baae3bc61a5 -->
## changeStatus
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/changeStatus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/changeStatus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET changeStatus`


<!-- END_606dc10f46efe291772f5baae3bc61a5 -->

<!-- START_55a9af37993fe0257326419de5cecaa2 -->
## properties/{id}/uploads-edit
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/properties/1/uploads-edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/properties/1/uploads-edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET properties/{id}/uploads-edit`


<!-- END_55a9af37993fe0257326419de5cecaa2 -->

<!-- START_56b96b8503d9430c44f429501a8e80e1 -->
## properties/{id}/uploads-edit
> Example request:

```bash
curl -X POST \
    "http://moveme.test/properties/1/uploads-edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/properties/1/uploads-edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST properties/{id}/uploads-edit`


<!-- END_56b96b8503d9430c44f429501a8e80e1 -->

<!-- START_1e0cd94333c99e320a68deb1c3af0c5b -->
## properties/{id}/{property}
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/properties/1/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/properties/1/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Property] 1"
}
```

### HTTP Request
`GET properties/{id}/{property}`


<!-- END_1e0cd94333c99e320a68deb1c3af0c5b -->

<!-- START_9ed54d1b8269897e0c5cdebd629ba1a7 -->
## properties/{id}/{property}/addphotos
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/properties/1/1/addphotos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/properties/1/1/addphotos"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Property] 1"
}
```

### HTTP Request
`GET properties/{id}/{property}/addphotos`


<!-- END_9ed54d1b8269897e0c5cdebd629ba1a7 -->

<!-- START_788ff9e045e2f928be437c8c4a9c3754 -->
## propertyphoto/add
> Example request:

```bash
curl -X POST \
    "http://moveme.test/propertyphoto/add" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/propertyphoto/add"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST propertyphoto/add`


<!-- END_788ff9e045e2f928be437c8c4a9c3754 -->

<!-- START_76f0ec380a08045b21faee92f63c3a7b -->
## property/create
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/property/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/property/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET property/create`


<!-- END_76f0ec380a08045b21faee92f63c3a7b -->

<!-- START_f2070d0136dbbc1dc09afc4af6113e73 -->
## property/my-property
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/property/my-property" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/property/my-property"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET property/my-property`


<!-- END_f2070d0136dbbc1dc09afc4af6113e73 -->

<!-- START_6c4a69cc1a64b687f2516563eefb30c3 -->
## properties/all-properties
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/properties/all-properties" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/properties/all-properties"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET properties/all-properties`


<!-- END_6c4a69cc1a64b687f2516563eefb30c3 -->

<!-- START_24b3fda3b1b1dc04342b799f42e992af -->
## property/create
> Example request:

```bash
curl -X POST \
    "http://moveme.test/property/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/property/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST property/create`


<!-- END_24b3fda3b1b1dc04342b799f42e992af -->

<!-- START_eb77607a6c2804d029dc185e0428dbb6 -->
## property/interest/{id}
> Example request:

```bash
curl -X POST \
    "http://moveme.test/property/interest/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/property/interest/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST property/interest/{id}`


<!-- END_eb77607a6c2804d029dc185e0428dbb6 -->

<!-- START_9eff7267b8482bf012b629476a18498b -->
## properties/applications
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/properties/applications" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/properties/applications"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET properties/applications`


<!-- END_9eff7267b8482bf012b629476a18498b -->

<!-- START_a171dd5f4f0f913ba53d4d66a1df5ada -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/events/all" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/events/all"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET events/all`


<!-- END_a171dd5f4f0f913ba53d4d66a1df5ada -->

<!-- START_7ca4f7024d6374f6e3d789b34fba7874 -->
## events/{id}
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/events/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/events/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Event] 1"
}
```

### HTTP Request
`GET events/{id}`


<!-- END_7ca4f7024d6374f6e3d789b34fba7874 -->

<!-- START_80f70a8e35dbbf277522c4ddfe649f31 -->
## venues/all
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/venues/all" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/venues/all"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET venues/all`


<!-- END_80f70a8e35dbbf277522c4ddfe649f31 -->

<!-- START_986824100e1a6390e8895da876e294cb -->
## venues/all
> Example request:

```bash
curl -X POST \
    "http://moveme.test/venues/all" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/venues/all"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST venues/all`


<!-- END_986824100e1a6390e8895da876e294cb -->

<!-- START_e8757e3b68e8dc18ab32bb7d0ecdef10 -->
## venues/towns/{town}
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/venues/towns/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/venues/towns/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET venues/towns/{town}`


<!-- END_e8757e3b68e8dc18ab32bb7d0ecdef10 -->

<!-- START_c4114fcfe186590889b851748266b416 -->
## venues/{town}/{name}/{id}
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/venues/1/1/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/venues/1/1/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Venue] 1"
}
```

### HTTP Request
`GET venues/{town}/{name}/{id}`


<!-- END_c4114fcfe186590889b851748266b416 -->

<!-- START_de85f195eb2e05a3203592b3263330e6 -->
## venues/{id}/tagin
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/venues/1/tagin" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/venues/1/tagin"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Venue] 1"
}
```

### HTTP Request
`GET venues/{id}/tagin`


<!-- END_de85f195eb2e05a3203592b3263330e6 -->

<!-- START_f7750d054a278f319238a44a6a071770 -->
## venues/{id}/tagin/add
> Example request:

```bash
curl -X POST \
    "http://moveme.test/venues/1/tagin/add" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/venues/1/tagin/add"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST venues/{id}/tagin/add`


<!-- END_f7750d054a278f319238a44a6a071770 -->

<!-- START_d9afb6a754e2fb1d61cb859a7e340ea0 -->
## venues/{id}/uploads-edit
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/venues/1/uploads-edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/venues/1/uploads-edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Venue] 1"
}
```

### HTTP Request
`GET venues/{id}/uploads-edit`


<!-- END_d9afb6a754e2fb1d61cb859a7e340ea0 -->

<!-- START_426fe28536b519c9b9335ad97c49d1a8 -->
## venues/{id}/uploads-edit
> Example request:

```bash
curl -X POST \
    "http://moveme.test/venues/1/uploads-edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/venues/1/uploads-edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST venues/{id}/uploads-edit`


<!-- END_426fe28536b519c9b9335ad97c49d1a8 -->

<!-- START_910bfcc4e69212f7976cec2af85b85cd -->
## venues/{town}/pdfs
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/venues/1/pdfs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/venues/1/pdfs"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET venues/{town}/pdfs`


<!-- END_910bfcc4e69212f7976cec2af85b85cd -->

<!-- START_d5b211d39c66b6fc35447689817f6886 -->
## venues/{town}/address-labels
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/venues/1/address-labels" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/venues/1/address-labels"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET venues/{town}/address-labels`


<!-- END_d5b211d39c66b6fc35447689817f6886 -->

<!-- START_89c8dece483cc94efab30b22722efc86 -->
## venues/{town}/qrcode-labels
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/venues/1/qrcode-labels" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/venues/1/qrcode-labels"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET venues/{town}/qrcode-labels`


<!-- END_89c8dece483cc94efab30b22722efc86 -->

<!-- START_659d897ca9e21fc71f49ade4b8c9a53b -->
## saveproperty/{id}
> Example request:

```bash
curl -X POST \
    "http://moveme.test/saveproperty/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/saveproperty/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST saveproperty/{id}`


<!-- END_659d897ca9e21fc71f49ade4b8c9a53b -->

<!-- START_d2be89a0404b3a9d05e217ea3b6c7940 -->
## unsaveproperty/{id}
> Example request:

```bash
curl -X POST \
    "http://moveme.test/unsaveproperty/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/unsaveproperty/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST unsaveproperty/{id}`


<!-- END_d2be89a0404b3a9d05e217ea3b6c7940 -->

<!-- START_8d6b1d7a8d2c648cf9764f807f460854 -->
## admin/searchvenues
> Example request:

```bash
curl -X POST \
    "http://moveme.test/admin/searchvenues" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/searchvenues"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/searchvenues`


<!-- END_8d6b1d7a8d2c648cf9764f807f460854 -->

<!-- START_2fb5718ba335cb7d5b6a2bb3b67b4951 -->
## admin/searchvenuetowns
> Example request:

```bash
curl -X POST \
    "http://moveme.test/admin/searchvenuetowns" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/searchvenuetowns"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/searchvenuetowns`


<!-- END_2fb5718ba335cb7d5b6a2bb3b67b4951 -->

<!-- START_249c33237ac808c68decd4efff488216 -->
## admin/properties/{id}/{property}/addphotos
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/admin/properties/1/1/addphotos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/properties/1/1/addphotos"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Property] 1"
}
```

### HTTP Request
`GET admin/properties/{id}/{property}/addphotos`


<!-- END_249c33237ac808c68decd4efff488216 -->

<!-- START_e40bc60a458a9740730202aaec04f818 -->
## admin
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/admin" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "User is not logged in."
}
```

### HTTP Request
`GET admin`


<!-- END_e40bc60a458a9740730202aaec04f818 -->

<!-- START_03e266f5d4d4b8f68612eeec7fa8c6ae -->
## admin/property
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/admin/property" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/property"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "User is not logged in."
}
```

### HTTP Request
`GET admin/property`


<!-- END_03e266f5d4d4b8f68612eeec7fa8c6ae -->

<!-- START_c5c8bacafac86b1e68a66fac811e8733 -->
## admin/venue
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/admin/venue" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/venue"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "User is not logged in."
}
```

### HTTP Request
`GET admin/venue`


<!-- END_c5c8bacafac86b1e68a66fac811e8733 -->

<!-- START_69f00dbddcd7762458c3d423a545206d -->
## admin/event
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/admin/event" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/event"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "User is not logged in."
}
```

### HTTP Request
`GET admin/event`


<!-- END_69f00dbddcd7762458c3d423a545206d -->

<!-- START_b1e084c9ad3ddeb3f7a7058a4c5f8687 -->
## admin/town
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/admin/town" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/town"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "User is not logged in."
}
```

### HTTP Request
`GET admin/town`


<!-- END_b1e084c9ad3ddeb3f7a7058a4c5f8687 -->

<!-- START_83279d6155c1499f6c34a50595cae12c -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/admin/permission" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/permission"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "User is not logged in."
}
```

### HTTP Request
`GET admin/permission`


<!-- END_83279d6155c1499f6c34a50595cae12c -->

<!-- START_ceb7a75690d365dd64967ceaf36dae81 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/admin/permission/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/permission/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "User is not logged in."
}
```

### HTTP Request
`GET admin/permission/create`


<!-- END_ceb7a75690d365dd64967ceaf36dae81 -->

<!-- START_deeb2b5a20a84b3aba5132baaf0b9d1f -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://moveme.test/admin/permission" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/permission"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/permission`


<!-- END_deeb2b5a20a84b3aba5132baaf0b9d1f -->

<!-- START_11101f22e3cefe1b2df0ba6e676d4d40 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/admin/permission/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/permission/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "User is not logged in."
}
```

### HTTP Request
`GET admin/permission/{permission}`


<!-- END_11101f22e3cefe1b2df0ba6e676d4d40 -->

<!-- START_9e9ecbeef32a6f6dfb84cc17d6f01300 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/admin/permission/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/permission/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "User is not logged in."
}
```

### HTTP Request
`GET admin/permission/{permission}/edit`


<!-- END_9e9ecbeef32a6f6dfb84cc17d6f01300 -->

<!-- START_9dc2feebeb72ff08beaba6c6323f7fba -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://moveme.test/admin/permission/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/permission/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/permission/{permission}`

`PATCH admin/permission/{permission}`


<!-- END_9dc2feebeb72ff08beaba6c6323f7fba -->

<!-- START_a00b2a629713d7b654e2f5aa0659ada4 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://moveme.test/admin/permission/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/permission/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/permission/{permission}`


<!-- END_a00b2a629713d7b654e2f5aa0659ada4 -->

<!-- START_82f68f2b49601191068d2a3e52f6bc8b -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/admin/role" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/role"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "User is not logged in."
}
```

### HTTP Request
`GET admin/role`


<!-- END_82f68f2b49601191068d2a3e52f6bc8b -->

<!-- START_13259a0edd4278fbb67d6176d6efeea9 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/admin/role/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/role/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "User is not logged in."
}
```

### HTTP Request
`GET admin/role/create`


<!-- END_13259a0edd4278fbb67d6176d6efeea9 -->

<!-- START_64c5083082f51f02e9c59f23549e1341 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://moveme.test/admin/role" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/role"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/role`


<!-- END_64c5083082f51f02e9c59f23549e1341 -->

<!-- START_d05bc13bf03325fe0912623be4c78b25 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/admin/role/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/role/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "User is not logged in."
}
```

### HTTP Request
`GET admin/role/{role}`


<!-- END_d05bc13bf03325fe0912623be4c78b25 -->

<!-- START_31bad7bd8379b0fff4dc61933b3899bf -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/admin/role/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/role/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "User is not logged in."
}
```

### HTTP Request
`GET admin/role/{role}/edit`


<!-- END_31bad7bd8379b0fff4dc61933b3899bf -->

<!-- START_06c4eb4f0da941a29b2da741c4339aad -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://moveme.test/admin/role/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/role/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/role/{role}`

`PATCH admin/role/{role}`


<!-- END_06c4eb4f0da941a29b2da741c4339aad -->

<!-- START_4acd49ff83e61527371e78c2982b2667 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://moveme.test/admin/role/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/role/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/role/{role}`


<!-- END_4acd49ff83e61527371e78c2982b2667 -->

<!-- START_bd487ab94d8034c2d13644bb1772fdfa -->
## admin/user
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/admin/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "User is not logged in."
}
```

### HTTP Request
`GET admin/user`


<!-- END_bd487ab94d8034c2d13644bb1772fdfa -->

<!-- START_85482a73dd59bd3ef1adaab154cc5407 -->
## admin/user/create
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/admin/user/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/user/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "User is not logged in."
}
```

### HTTP Request
`GET admin/user/create`


<!-- END_85482a73dd59bd3ef1adaab154cc5407 -->

<!-- START_71dba47ec1215d1147a3f8e59c55751a -->
## admin/user
> Example request:

```bash
curl -X POST \
    "http://moveme.test/admin/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/user`


<!-- END_71dba47ec1215d1147a3f8e59c55751a -->

<!-- START_3b3de25d21f37e1748b345027c37ce73 -->
## admin/user/{user}
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/admin/user/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/user/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "User is not logged in."
}
```

### HTTP Request
`GET admin/user/{user}`


<!-- END_3b3de25d21f37e1748b345027c37ce73 -->

<!-- START_8dbd3c8dace74c8cc20dbdadc3a61eed -->
## admin/user/{user}/edit
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/admin/user/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/user/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "User is not logged in."
}
```

### HTTP Request
`GET admin/user/{user}/edit`


<!-- END_8dbd3c8dace74c8cc20dbdadc3a61eed -->

<!-- START_7bc8a51548d7c6e9ac5bc7dda1263ba7 -->
## admin/user/{user}
> Example request:

```bash
curl -X PUT \
    "http://moveme.test/admin/user/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/user/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/user/{user}`

`PATCH admin/user/{user}`


<!-- END_7bc8a51548d7c6e9ac5bc7dda1263ba7 -->

<!-- START_b8a25da15b804e04ecaa4bf05806041e -->
## admin/user/{user}
> Example request:

```bash
curl -X DELETE \
    "http://moveme.test/admin/user/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/user/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/user/{user}`


<!-- END_b8a25da15b804e04ecaa4bf05806041e -->

<!-- START_4240f67a0da95f5d725a063d58c67810 -->
## changePropertyStatus
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/changePropertyStatus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/changePropertyStatus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "User is not logged in."
}
```

### HTTP Request
`GET changePropertyStatus`


<!-- END_4240f67a0da95f5d725a063d58c67810 -->

<!-- START_b8bf488f2513fc2ff329eff5ca14d8bd -->
## changeVenueStatus
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/changeVenueStatus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/changeVenueStatus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "User is not logged in."
}
```

### HTTP Request
`GET changeVenueStatus`


<!-- END_b8bf488f2513fc2ff329eff5ca14d8bd -->

<!-- START_f740a1c1b06aed255343b83267c5fb09 -->
## admin/venues/create
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/admin/venues/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/venues/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "User is not logged in."
}
```

### HTTP Request
`GET admin/venues/create`


<!-- END_f740a1c1b06aed255343b83267c5fb09 -->

<!-- START_5d0dc3587fc8e4b2eb095ba6a1657a36 -->
## admin/venues/create
> Example request:

```bash
curl -X POST \
    "http://moveme.test/admin/venues/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/venues/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/venues/create`


<!-- END_5d0dc3587fc8e4b2eb095ba6a1657a36 -->

<!-- START_44bf94ab8d6d949bd54987c0d92d2e3e -->
## admin/venues/{id}/edit
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/admin/venues/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/venues/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "User is not logged in."
}
```

### HTTP Request
`GET admin/venues/{id}/edit`


<!-- END_44bf94ab8d6d949bd54987c0d92d2e3e -->

<!-- START_ba768473438477a4eb942f4351378efd -->
## admin/venues/{id}/edit
> Example request:

```bash
curl -X POST \
    "http://moveme.test/admin/venues/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/venues/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/venues/{id}/edit`


<!-- END_ba768473438477a4eb942f4351378efd -->

<!-- START_be677fdc7fdfa2c2591bce0fbfa6ddef -->
## admin/venues/{id}/uploads-edit
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/admin/venues/1/uploads-edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/venues/1/uploads-edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "User is not logged in."
}
```

### HTTP Request
`GET admin/venues/{id}/uploads-edit`


<!-- END_be677fdc7fdfa2c2591bce0fbfa6ddef -->

<!-- START_0e2981bbee2b8a61e9a5cc0c9a37ab72 -->
## admin/venues/{id}/uploads-edit
> Example request:

```bash
curl -X POST \
    "http://moveme.test/admin/venues/1/uploads-edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/venues/1/uploads-edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/venues/{id}/uploads-edit`


<!-- END_0e2981bbee2b8a61e9a5cc0c9a37ab72 -->

<!-- START_b9bcdc142b61fd13be7a640a1b8f1888 -->
## admin/charts
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/admin/charts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/charts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "User is not logged in."
}
```

### HTTP Request
`GET admin/charts`


<!-- END_b9bcdc142b61fd13be7a640a1b8f1888 -->

<!-- START_2000017e8f22b8914d503292c2107059 -->
## Fetch the particular company details

> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/admin/charts/chart" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/charts/chart"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "User is not logged in."
}
```

### HTTP Request
`GET admin/charts/chart`


<!-- END_2000017e8f22b8914d503292c2107059 -->

<!-- START_eceeee62f7792c3f49c89123e82bb181 -->
## admin/events/create
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/admin/events/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/events/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "User is not logged in."
}
```

### HTTP Request
`GET admin/events/create`


<!-- END_eceeee62f7792c3f49c89123e82bb181 -->

<!-- START_cf17a57542fb400d4eadfbbec4610699 -->
## admin/events/create
> Example request:

```bash
curl -X POST \
    "http://moveme.test/admin/events/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/events/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/events/create`


<!-- END_cf17a57542fb400d4eadfbbec4610699 -->

<!-- START_ae6e9e26db71a68a33369e171c1e1f92 -->
## admin/events/{id}/edit
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/admin/events/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/events/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "User is not logged in."
}
```

### HTTP Request
`GET admin/events/{id}/edit`


<!-- END_ae6e9e26db71a68a33369e171c1e1f92 -->

<!-- START_4201ba7ec46e33b9e590b438cc40457c -->
## admin/events/{id}/edit
> Example request:

```bash
curl -X POST \
    "http://moveme.test/admin/events/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/events/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/events/{id}/edit`


<!-- END_4201ba7ec46e33b9e590b438cc40457c -->

<!-- START_47af33db986554ea6dfd7d67df1f86c3 -->
## admin/events/{id}/uploads-edit
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/admin/events/1/uploads-edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/events/1/uploads-edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "User is not logged in."
}
```

### HTTP Request
`GET admin/events/{id}/uploads-edit`


<!-- END_47af33db986554ea6dfd7d67df1f86c3 -->

<!-- START_a4c0e7abc8318e986a48261bdb39a085 -->
## admin/events/{id}/uploads-edit
> Example request:

```bash
curl -X POST \
    "http://moveme.test/admin/events/1/uploads-edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/events/1/uploads-edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/events/{id}/uploads-edit`


<!-- END_a4c0e7abc8318e986a48261bdb39a085 -->

<!-- START_af39cbccabb255b364d6f0f9f375262f -->
## admin/event/delete/{id}
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/admin/event/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/event/delete/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "User is not logged in."
}
```

### HTTP Request
`GET admin/event/delete/{id}`


<!-- END_af39cbccabb255b364d6f0f9f375262f -->

<!-- START_4c2f674ed85f3c7e530dbe45d33da5de -->
## admin/event/withsoftdelete
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/admin/event/withsoftdelete" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/event/withsoftdelete"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "User is not logged in."
}
```

### HTTP Request
`GET admin/event/withsoftdelete`


<!-- END_4c2f674ed85f3c7e530dbe45d33da5de -->

<!-- START_a76abc340e356b21acfa65fc3b8a5a47 -->
## admin/event/softdeleted
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/admin/event/softdeleted" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/event/softdeleted"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "User is not logged in."
}
```

### HTTP Request
`GET admin/event/softdeleted`


<!-- END_a76abc340e356b21acfa65fc3b8a5a47 -->

<!-- START_de59d0052532e063cc993d78b8ebf9e7 -->
## admin/event/{id}
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/admin/event/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/event/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "User is not logged in."
}
```

### HTTP Request
`GET admin/event/{id}`


<!-- END_de59d0052532e063cc993d78b8ebf9e7 -->

<!-- START_2bd0bc54b11d67264cf4e5528460a7ee -->
## admin/event/deletesoft/{id}
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/admin/event/deletesoft/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/event/deletesoft/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "User is not logged in."
}
```

### HTTP Request
`GET admin/event/deletesoft/{id}`


<!-- END_2bd0bc54b11d67264cf4e5528460a7ee -->

<!-- START_1e18f902259f1f674f1228597096fb17 -->
## admin/properties/create
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/admin/properties/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/properties/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "User is not logged in."
}
```

### HTTP Request
`GET admin/properties/create`


<!-- END_1e18f902259f1f674f1228597096fb17 -->

<!-- START_f7470d45e4dc091ec12e4c494a5578b4 -->
## admin/properties/create
> Example request:

```bash
curl -X POST \
    "http://moveme.test/admin/properties/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/properties/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/properties/create`


<!-- END_f7470d45e4dc091ec12e4c494a5578b4 -->

<!-- START_1c7fd5b710bead40ae3eaab3f64a7ce8 -->
## admin/properties/{id}/edit
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/admin/properties/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/properties/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "User is not logged in."
}
```

### HTTP Request
`GET admin/properties/{id}/edit`


<!-- END_1c7fd5b710bead40ae3eaab3f64a7ce8 -->

<!-- START_2467dc4444701c7874458b0c4d7be5e8 -->
## admin/properties/{id}/edit
> Example request:

```bash
curl -X POST \
    "http://moveme.test/admin/properties/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/properties/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/properties/{id}/edit`


<!-- END_2467dc4444701c7874458b0c4d7be5e8 -->

<!-- START_154e8d53b369f4e47641f57e8484854a -->
## admin/propertyphoto/add
> Example request:

```bash
curl -X POST \
    "http://moveme.test/admin/propertyphoto/add" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/propertyphoto/add"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/propertyphoto/add`


<!-- END_154e8d53b369f4e47641f57e8484854a -->

<!-- START_e8b7625a5a69d470246295bc8564e9ba -->
## admin/properties/{id}/uploads-edit
> Example request:

```bash
curl -X GET \
    -G "http://moveme.test/admin/properties/1/uploads-edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/properties/1/uploads-edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "User is not logged in."
}
```

### HTTP Request
`GET admin/properties/{id}/uploads-edit`


<!-- END_e8b7625a5a69d470246295bc8564e9ba -->

<!-- START_84a446a9bb1f5ee0666e043bd4e3c28a -->
## admin/properties/{id}/uploads-edit
> Example request:

```bash
curl -X POST \
    "http://moveme.test/admin/properties/1/uploads-edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://moveme.test/admin/properties/1/uploads-edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/properties/{id}/uploads-edit`


<!-- END_84a446a9bb1f5ee0666e043bd4e3c28a -->


