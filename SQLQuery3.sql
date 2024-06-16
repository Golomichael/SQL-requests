

   



SELECT * FROM Personne;

SELECT * FROM Voiture;

    

SELECT * FROM Accident;



EXEC GetnumProp @startYear = 2020, @endYear = 2021;

    

EXEC GetProp;

    

EXEC GetDamCity @city = 'New York';

    

EXEC GetnumAcci;

    

EXEC GetNamProp @numAccidents = 2;

    

EXEC GetnumAcciDat @Date = '2023-01-01';

   

EXEC GetnumAcciHour @startHour = '08:00:00', @endHour = '18:00:00';