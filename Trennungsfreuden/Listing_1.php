interface OrderService {   public function findOrderById($orderId);   public function findOrdersByUserId($userId);   public function placeOrder($userId, array $items);   public function cancelOrder($orderId);   // ...} 