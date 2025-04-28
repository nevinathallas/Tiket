<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();
$response = $client->request('GET', 'http://localhost:8000/api/transports', [
    // 'headers' => [
    //     'Authorization' => 'Bearer TOKEN_ANDA'
    // ]
]);

$data = json_decode($response->getBody(), true);

class TranportIndex
{
    private $apiBaseUrl;

    public function __construct($apiBaseUrl)
    {
        $this->apiBaseUrl = rtrim($apiBaseUrl, '/');
    }

    private function request($endpoint)
    {
        $url = $this->apiBaseUrl . $endpoint;
        
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10); // 10 seconds timeout

        $response = curl_exec($ch);
        $error = curl_error($ch);
        curl_close($ch);

        if ($error) {
            throw new Exception("cURL Error: $error");
        }

        return json_decode($response, true); // Assuming API returns JSON
    }

    public function getTransports()
    {
        return $this->request('/api/transports');
    }

    public function getTransportTypes()
    {
        return $this->request('/api/transport-types');
    }

    public function getRoutes()
    {
        return $this->request('/api/routes');
    }

    public function getSchedules()
    {
        return $this->request('/api/schedules');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transport Index</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Transport Index</h1>
        <hr>

        <h3>Transports</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Code</th>
                    <th>Description</th>
                    <th>Seat</th>
                    <th>Transport Type</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Step 1: Fetch data from the API
                $apiUrl = 'http://localhost:8000/api/transports'; // Change this to your actual API URL
                $response = file_get_contents($apiUrl);

                // Step 2: Decode the JSON response
                $data = json_decode($response, true);

                // Step 3: Check for success and display the data
                if ($data && $data['success']) {
                    foreach ($data['data'] as $transport) {
                        echo "<tr>";
                        echo "<td>{$transport['id']}</td>";
                        echo "<td>{$transport['code']}</td>";
                        echo "<td>{$transport['description']}</td>";
                        echo "<td>{$transport['seat']}</td>";
                        echo "<td>{$transport['transport_type']['description']}</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "Gagal mengambil data transportasi.";
                }
                ?>
            </tbody>
        </table>

        <h3>Routes</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Route</th>
                    <th>Depart Time</th>
                    <th>Price</th>
                    <th>Transport Code</th>
                    <th>Transport Name</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $apiUrl = 'http://localhost:8000/api/routes';
            $response = file_get_contents($apiUrl);
            $data = json_decode($response, true);

            if ($data && $data['success']) {
                foreach ($data['data'] as $route) {
                    echo "<tr>";
                    echo "<td>{$route['id']}</td>";
                    echo "<td>{$route['route_from']} - {$route['route_to']}</td>";
                    $departTime = isset($route['depart']) ? date('d-m-Y H:i', strtotime($route['depart'])) : '-';
                    echo "<td>{$departTime}</td>";
                    $price = isset($route['price']) ? 'Rp ' . number_format($route['price'], 0, ',', '.') : '-';
                    echo "<td>{$price}</td>";
                    echo "<td>{$route['transport']['code']}</td>";
                    echo "<td>{$route['transport']['description']}</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No data available</td></tr>";
            }
            ?>
            </tbody>
        </table>

        <h3>Schedules</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Route</th>
                    <th>Depart Time</th>
                    <th>Available Seats</th>
                    <th>Price</th>
                    <th>Transport Code</th>
                    <th>Transport Name</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $apiUrl = 'http://localhost:8000/api/schedules';
                $response = file_get_contents($apiUrl);
                $data = json_decode($response, true);

                if ($data && $data['success']) {
                    foreach ($data['data'] as $schedule) {
                        echo "<tr>";
                        echo "<td>{$schedule['id']}</td>";
                        echo "<td>{$schedule['route_from']} - {$schedule['route_to']}</td>";
                        // Format waktu agar mudah dibaca
                        $departTime = date('d-m-Y H:i', strtotime($schedule['depart']));
                        echo "<td>{$departTime}</td>";
                        echo "<td>{$schedule['transport']['seat']}</td>";
                        $price = "Rp " . number_format($schedule['price'], 0, ',', '.');
                        echo "<td>{$price}</td>";
                        echo "<td>{$schedule['transport']['code']}</td>";
                        echo "<td>{$schedule['transport']['description']}</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='9'>No data available</td></tr>";
                }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>