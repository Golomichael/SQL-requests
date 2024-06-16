CREATE PROCEDURE UpdateDam
AS
BEGIN
    UPDATE Accident
    SET dommage = dommage * 0.95
    WHERE dommage > 5000;
END;
