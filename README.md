# Delegation-diet
How to run:
1. Install docker and docker-compose on youre machine
2. Download repo
3. In project folder just type docker-compose up on terminal
THAT'S ALL :)

To calculate date use endpoint: http://localhost:8080/delegation-diet [POST]

example request body:
{
    "delegation": {
        "days" : [
            {
                "date" : "2023-01-12",
                "hours": 8
            },
            {
                "date" : "2023-01-13",
                "hours": 8
            },
            {
                "date" : "2023-01-14",
                "hours": 8
            },
            {
                "date" : "2023-01-15",
                "hours": 
            },
            {
                "date" : "2023-01-16",
                "hours": 8
            },
            {
                "date" : "2023-01-17",
                "hours": 8
            },
            {
                "date" : "2023-01-18",
                "hours": 8
            },
            {
                "date" : "2023-01-19",
                "hours": 8
            },
            {
                "date" : "2023-01-20",
                "hours": 8
            },
            {
                "date" : "2023-01-21",
                "hours": 4
            }
        ],
        "country": "PL"
    }
}
