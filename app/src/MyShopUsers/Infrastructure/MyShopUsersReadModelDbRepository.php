<?php

declare(strict_types=1);

namespace App\src\MyShopUsers\Infrastructure;

use App\src\MyShopUsers\ReadModel\MyShopUsersReadModelRepository;
use Illuminate\Database\ConnectionInterface;

readonly class MyShopUsersReadModelDbRepository implements MyShopUsersReadModelRepository
{
    public function __construct(private ConnectionInterface $db)
    {
    }

    public function findUsersWithLastPurchaseDate(): array
    {
        $sql = '
            SELECT
                shop_user_id AS shop_user_id,
                MAX(purchase_date) AS last_purchase_date
            FROM
                shop_purchases
            GROUP BY
                shop_user_id;
        ';

        return $this->db->select($sql);
    }


    public function getShopUsersSortedByBirthDate(): array
    {
        $sql = '
            SELECT
                sp.id AS shop_user_id,
                sp.birth_date AS birth_date,
                MONTH(sp.birth_date) AS month,
                DAY(sp.birth_date) AS day
            FROM
                shop_users AS sp
            ORDER BY
                MONTH(sp.birth_date) DESC, DAY(sp.birth_date) DESC;
        ';

        return $this->db->select($sql);
    }

    public function getShopUsersWithBirthdayInCurrentWeek(): array
    {
        $sql = '
            SELECT
                sp.id AS shop_user_id,
                sp.birth_date AS birth_date
            FROM
                shop_users AS sp
            WHERE
                MONTH(sp.birth_date) = MONTH(CURRENT_TIMESTAMP)
                AND
                    DAY(sp.birth_date) >= DAY(DATE(CURRENT_TIMESTAMP + INTERVAL (1 - WEEKDAY(CURRENT_TIMESTAMP)-1) DAY))
                AND
                    DAY(sp.birth_date) <= DAY(DATE(CURRENT_TIMESTAMP + INTERVAL (7- WEEKDAY(CURRENT_TIMESTAMP)-1) DAY));
        ';

        return $this->db->select($sql);
    }
}
