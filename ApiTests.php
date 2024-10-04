<?php

function test_it_can_fetch_assets_with_active_vulnerabilities_in_the_last_3_months() {
    $last_3_month = 'last 3 month';

    $sql = "
        SELECT a.*, v.* FROM assets a
        JOIN asset_vulnerabilities av on a.id = av.asset_id
        JOIN vulnerabilities v on v.id = av.vulnerability_id
        WHERE v.status and v.created_at >= '$last_3_month'
    ";
}

function test_it_can_fetch_active_vulnerabilities_by_type_and_source($type, $source) {
    $type = 'Application';
    $source = 'GITHUB';

    $sql = "
        SELECT * FROM vulnerabilities
        WHERE status and type='$type' and source='$source'
    ";
}

function test_it_can_fetch_assets_with_archived_vulnerabilities_in_last_6_months() {
    $last_6_month = 'last 6 month';

    $sql = "
        SELECT a.*, v.* FROM assets a
        JOIN asset_vulnerabilities av on a.id = av.asset_id
        JOIN vulnerabilities v on v.id = av.vulnerability_id
        WHERE v.archived_at >= '$last_6_month'
    ";
}

function test_it_can_fetch_vulnerabilities_by_name_severity($name, $severity) {
    $name = 'sql-injection-detected';
    $severity = '1'; // HIGH

    $sql = "
        SELECT * FROM vulnerabilities
        WHERE name='$name' and severity='$severity'
    ";
}