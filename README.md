# Laravel приложение для рассчета цены продукта для покупателя

Документация API запросов

1. POST для создание результата

/api/results

Пример json тела запроса:
```
{
    "milliseconds": "160" (REQUIRED)
    "email": "natalia27@example.net" (OPTIONAL)
}
```

Пример json ответа при успешном выполнении (200 OK):
```
{
    "result": {
        "milliseconds": 160,
        "member_id": 2001,
        "id": 9744
    }
}
```

Пример json ответа при ошибки валидации (422 Unprocessable Entity):
```
{
    "message": "The milliseconds field is required.",
    "errors": {
        "milliseconds": [
            "The milliseconds field is required."
        ]
    }
}
```

2. GET для отображения 10 лучших результатов

/api/results/top

Пример json тела запроса:
```
{
    "email": "natalia27@example.net" (OPTIONAL)
}
```

Пример json ответа при успешном выполнении (200 OK):
```
{
    "top": [
        {
            "email": "ls*****@example.org",
            "place": 0,
            "milliseconds": 100
        },
        {
            "email": "de******@example.net",
            "place": 0,
            "milliseconds": 100
        },
        {
            "email": "qe*****@example.net",
            "place": 0,
            "milliseconds": 101
        },
        {
            "email": "lk******@example.org",
            "place": 0,
            "milliseconds": 101
        },
        {
            "email": "se**************@example.com",
            "place": 0,
            "milliseconds": 104
        },
        {
            "email": "le**********@example.org",
            "place": 0,
            "milliseconds": 104
        },
        {
            "email": "sa****************@example.org",
            "place": 0,
            "milliseconds": 105
        },
        {
            "email": "es*******@example.com",
            "place": 0,
            "milliseconds": 106
        },
        {
            "email": "xr***@example.com",
            "place": 0,
            "milliseconds": 106
        },
        {
            "email": "vb****@example.org",
            "place": 0,
            "milliseconds": 107
        }
    ],
    "self": [
        {
            "email": "abagail73@example.com",
            "milliseconds": 627
        },
        {
            "email": "abagail73@example.com",
            "milliseconds": 1331
        },
        {
            "email": "abagail73@example.com",
            "milliseconds": 1600
        },
        {
            "email": "abagail73@example.com",
            "milliseconds": 1677
        },
        {
            "email": "abagail73@example.com",
            "milliseconds": 2430
        },
        {
            "email": "abagail73@example.com",
            "milliseconds": 5779
        }
    ]
}
```
