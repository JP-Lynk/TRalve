<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boostrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


    <link rel="stylesheet" href="ticket.css">
    <link rel="stylesheet" href="ticket.css">
    <title>Booking Information</title>
</head>

<body>
    <div class="table_container">
        <h3>Booking Informaton</h3>
        <table class="table table-hover table-bordered table-striped" id="bookingTable">
            <thead>
                <tr>
                    <th>Name</th>
                    <!-- <th>Email</th> -->
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Number of adults</th>
                    <th>Number of children</th>
                    <th>Arivals</th>
                    <th>Leaving</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $connection = mysqli_connect('localhost', 'root', '', 'book_db');
                $query = "select * from `book_form`";
                $result = mysqli_query($connection, $query);
                if (!$result) {
                    die("query failed" . mysqli_error($connection));
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <td><?php echo $row['name']; ?></td>
                            <!-- <td><?php echo $row['email']; ?></td> -->
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['guests_adult']; ?></td>
                            <td><?php echo $row['guests_kid']; ?></td>
                            <td><?php echo $row['arrivals']; ?></td>
                            <td><?php echo $row['leaving']; ?></td>
                            <td><i class="fa-solid fa-eye" style="color: #000000;"></i> <i class="fa-solid fa-trash" style="color: #000000;"></i> </td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Show Ticket</button>
    </div>

    <!-- Model -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Reservation Tickets</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="blocks">
                            <div class="right">
                                <div class="trip-detail-container">
                                    <div class="one-way-container">
                                        <h3 class="trip-detail-title">One-Way</h3>
                                        <table>
                                            <table width="200%">
                                                <tr>
                                                    <td>From</td>
                                                    <td>Thunder Bay</td>
                                                </tr>
                                                <tr>
                                                    <td>To</td>
                                                    <td>Longlac</td>
                                                </tr>
                                                <tr>
                                                    <td>Transfers</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>Departure</td>
                                                    <td>2021-08-28 18:00:00 ET</td>
                                                </tr>
                                                <tr>
                                                    <td>Arrival</td>
                                                    <td>2021-08-28 17:00:00 ET</td>
                                                </tr>
                                            </table>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>