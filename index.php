<?php

// This example simulates a very basic web application endpoint.
// In a real Laravel application, this logic would be within a controller
// or a route closure. Laravel Cloud manages the deployment, scaling,
// and infrastructure for such applications, allowing developers to focus
// on the code itself.

header('Content-Type: text/plain');

echo "Laravel Cloud Demo: Simple Application Endpoint\n";
echo "-----------------------------------------------\n";

// Simulate some work being done by the application.
// This could represent a database query, an API call, or complex computation.
// On Laravel Cloud, instances handling such requests can scale up
// automatically when traffic increases, and scale down to zero when idle.
$startTime = microtime(true);
$processingTime = rand(100, 500) / 1000; // Simulate 0.1 to 0.5 seconds of work
usleep($processingTime * 1000000); // usleep expects microseconds
$endTime = microtime(true);

echo "Request processed successfully!\n";
echo "Simulated processing time: " . number_format($processingTime, 3) . " seconds.\n";
echo "Current server time: " . date('Y-m-d H:i:s') . "\n";

// The article emphasizes "instant scale to zero".
// This means that when no requests are coming in, the underlying server
// resources for this application can be completely shut down, incurring
// no cost. When a new request arrives, the platform quickly spins up
// an instance to handle it, making it cost-efficient for idle applications.
echo "\nThis simple application, if deployed on Laravel Cloud, would benefit from:\n";
echo "- Managed hosting: No need to configure servers, databases, queues.\n";
echo "- Cost-efficiency: The new $5/month plan and spending limits.\n";
echo "- Instant Scale to Zero: When idle, this app consumes no resources and costs nothing.\n";

?>