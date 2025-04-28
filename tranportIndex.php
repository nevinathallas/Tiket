<?php

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
                    <th>Name</th>
                    <th>Type</th>
                </tr>
            </thead>
            <tbody>
            <?php
                try {
                    $apiBaseUrl = 'http://127.0.0.1:8000/admin/api-docs'; // Update sesuai konfigurasi Anda
                    $transportService = new TranportIndex($apiBaseUrl);

                    $transports = $transportService->getTransports();
                    if (is_array($transports)) {
                        foreach ($transports as $transport) {
                            echo "<tr>
                                    <td>{$transport['id']}</td>
                                    <td>{$transport['name']}</td>
                                    <td>{$transport['type']}</td>
                                </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='3'>No data available</td></tr>";
                    }
                } catch (Exception $e) {
                    echo "<tr><td colspan='3'>Error: {$e->getMessage()}</td></tr>";
                }
                ?>
            </tbody>
        </table>

        <h3>Routes</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Origin</th>
                    <th>Destination</th>
                </tr>
            </thead>
            <tbody>
                <?php
                try {
                    $routes = $transportService->getRoutes();
                    foreach ($routes as $route) {
                        echo "<tr>
                                <td>{$route['id']}</td>
                                <td>{$route['origin']}</td>
                                <td>{$route['destination']}</td>
                              </tr>";
                    }
                } catch (Exception $e) {
                    echo "<tr><td colspan='3'>Error: {$e->getMessage()}</td></tr>";
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
                    <th>Time</th>
                </tr>
            </thead>
            <tbody>
                <?php
                try {
                    $schedules = $transportService->getSchedules();
                    foreach ($schedules as $schedule) {
                        echo "<tr>
                                <td>{$schedule['id']}</td>
                                <td>{$schedule['route']}</td>
                                <td>{$schedule['time']}</td>
                              </tr>";
                    }
                } catch (Exception $e) {
                    echo "<tr><td colspan='3'>Error: {$e->getMessage()}</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>