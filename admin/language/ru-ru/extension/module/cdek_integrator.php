<?php
// Heading & Titles
$_['heading_title']                          = 'СДЭК Интегратор';
$_['heading_title_help']                     = 'Документация';
$_['heading_title_license']                  = 'Лицензионное соглашение';

// Tab names
$_['tab_data']                               = 'Общие данные';
$_['tab_auth']                               = 'Аутентификация';
$_['tab_order']                              = 'Заказы';
$_['tab_status']                             = 'Статусы';
$_['tab_currency']                           = 'Валюты';
$_['tab_additional']                         = 'Дополнительно';

// Buttons & Actions
$_['button_sync']                            = 'Синхронизировать';
$_['button_cancel']                          = 'Отмена';
$_['button_option']                          = 'Настройки';
$_['button_new_order']                       = 'Новая отгрузка';
$_['button_create']                          = 'Создать';
$_['button_send']                            = 'Отправить';
$_['button_delete']                          = 'Удалить';
$_['button_add_attempt']                     = 'Добавить попытку';
$_['button_save']                            = 'Сохранить';
$_['button_apply']                           = 'Применить';
$_['button_print']                           = 'Печать';
$_['button_filter']                          = 'Фильтр';

// Text messages
$_['text_last_dispatches']                   = 'Последние отгрузки';
$_['text_sync_required_order']               = 'Требуется синхронизация заказа';
$_['text_sync']                              = 'Синхронизовать';
$_['text_view_all_dispatches']               = 'Смотреть все отгрузки';
$_['text_loading']                           = 'Загрузка...';
$_['text_no_results']                        = 'Результаты не найдены';
$_['text_select']                            = 'Выбрать';
$_['text_updatecity']                        = 'Обновить города';
$_['text_update_success']                    = 'Города успешно обновлены!';
$_['text_testing_api_keys']                  = 'Используйте учетные данные Sandbox (тестовой среды) для тестирования интеграции';
$_['text_short_length']                      = 'Длина';
$_['text_short_width']                       = 'Ширина';
$_['text_short_height']                      = 'Высота';
$_['text_last_synchronization']              = 'Последняя синхронизация:';
$_['text_attention_setup_required']          = 'Для работы модуля необходимо выполнить настройку.';
$_['text_status_accepted']                   = 'Принят';
$_['text_success_order_shipped']             = 'Отгружен заказ!';
$_['text_success_receipt_loaded']            = 'Квитанция для заказа #%s успешно загружена!';
$_['text_success_order_deleted']             = 'Заказ #%s успешно удален.';
$_['text_success_order_synced']              = 'Заказ #%s обновлен!<span class="help">%s: %s</span>';
$_['text_sync_date']                         = 'Дата синхронизации';
$_['text_grams']                             = 'Граммы';
$_['text_centimeters']                       = 'Сантиметры';
$_['text_month_january']                    = 'января';
$_['text_month_february']                   = 'февраля';
$_['text_month_march']                      = 'марта';
$_['text_month_april']                      = 'апреля';
$_['text_month_may']                        = 'мая';
$_['text_month_june']                       = 'июня';
$_['text_month_july']                       = 'июля';
$_['text_month_august']                     = 'августа';
$_['text_month_september']                  = 'сентября';
$_['text_month_october']                    = 'октября';
$_['text_month_november']                   = 'ноября';
$_['text_month_december']                   = 'декабря';

// Column headers
$_['column_site_order_id']                   = 'ID заказа';
$_['column_dispatch_number']                 = 'Номер отгрузки';
$_['column_act_number']                      = 'Номер акта';
$_['column_dispatch_date']                   = 'Дата отгрузки';
$_['column_city_from']                       = 'Город отправки';
$_['column_city_to']                         = 'Город доставки';
$_['column_status']                          = 'Статус';
$_['column_delivery_cost']                   = 'Стоимость доставки';
$_['column_order_id']                        = 'Номер заказа';
$_['column_customer']                        = 'Клиент';
$_['column_total']                           = 'Итого';
$_['column_date_added']                      = 'Дата добавления';
$_['column_action']                          = 'Действие';

// Entry labels
$_['entry_default_data']                     = 'Использовать данные по умолчанию';
$_['entry_size_help']                        = 'Размеры в сантиметрах';
$_['entry_size']                             = 'Размер посылки';
$_['entry_weight_default']                   = 'Вес по умолчанию';
$_['entry_data_work_mode_default']           = 'Режим работы по умолчанию';
$_['entry_city']                             = 'Город отправителя';
$_['entry_shipment_point_default']           = 'ПВЗ по умолчанию';
$_['entry_city_default']                     = 'Использовать город по умолчанию';
$_['entry_package_default']                  = 'Упаковка по умолчанию';
$_['entry_copy_count']                       = 'Количество копий акта приема-передачи';
$_['entry_weight_class_id']                  = 'Класс веса';
$_['entry_length_class_id']                  = 'Класс длины/размера';
$_['entry_account']                          = 'Аккаунт/Логин';
$_['entry_password']                         = 'Пароль';
$_['entry_test_account']                     = 'Тестовый аккаунт';
$_['entry_test_password']                    = 'Тестовый пароль';

// Dispatch info labels
$_['label_order_number']                     = 'Номер заказа';
$_['label_receipt']                          = 'Квитанция';
$_['label_shipment_date']                    = 'Дата отгрузки';
$_['label_cdek_number']                      = 'Номер отправления СДЭК';
$_['label_act_number']                       = 'Номер акта приема-передачи';
$_['label_tariff']                           = 'Тариф';
$_['label_seller_name']                      = 'Истинный продавец';
$_['label_seller_help']                      = 'Используется при печати заказов для отображения настоящего продавца товара, либо торгового названия';
$_['label_additional_cost']                  = 'Дополнительный сбор за доставку, который ИМ берет с получателя';
$_['label_total']                            = 'Итого';
$_['label_status']                           = 'Статус';
$_['label_status_history']                   = 'История изменений';
$_['label_delay_reason']                     = 'Причина задержки';
$_['label_delay_history']                    = 'История причин задержек';
$_['label_sender']                           = 'Отправитель';
$_['label_sender_city']                      = 'Город';
$_['label_sender_postcode']                  = 'Почтовый индекс';
$_['label_recipient']                        = 'Получатель';
$_['label_recipient_name']                   = 'ФИО';
$_['label_recipient_phone']                  = 'Телефон';
$_['label_recipient_email']                  = 'Электронный адрес';
$_['label_recipient_city']                   = 'Город';
$_['label_recipient_postcode']               = 'Почтовый индекс';
$_['label_street']                           = 'Улица';
$_['label_house']                            = 'Дом, корпус, строение';
$_['label_flat']                             = 'Квартира/Офис';
$_['label_courier_waiting']                  = 'Ожидание курьера';
$_['label_courier_lunch']                    = 'Обед:';
$_['label_courier_street']                   = 'Улица';
$_['label_courier_house']                    = 'Дом, корпус, строение';
$_['label_courier_flat']                     = 'Квартира/Офис';
$_['label_courier_sender']                   = 'Отправитель';
$_['label_courier_phone']                    = 'Телефон';
$_['label_courier_comment']                  = 'Комментарий';

// License form
$_['license_username']                       = 'Имя пользователя:';
$_['license_password']                       = 'Пароль:';
$_['license_thanks']                         = 'Благодарим за выбор компании СДЭК в качестве службы доставки! Пожалуйста, введите e-mail и пароль, который Вы указали в Службе Поддержки Клиентов.';
$_['license_register_info']                  = 'Чтобы начать работу с модулем, Вам необходимо пройти процедуру регистрации по ссылке';
$_['license_register_after']                 = 'После этого Вы получите логин и пароль лицензии модуля, которая активируется только после проверки данных, о чем будет направлено письмо с дальнейшими инструкциями для корректной настройки модуля.';
$_['license_support_info']                   = 'По любым вопросам связанным с работой модуля, заключением договора и/или взаиморасчётам можно обращаться по электронной почте';

// Status history columns
$_['column_status_id']                       = 'id';
$_['column_status_name']                     = 'Статус';
$_['column_status_date']                     = 'Дата';
$_['column_status_city']                     = 'Город';

// Delivery cost messages
$_['text_delivery_last_change']               = 'Последнее изменение';

// Help texts
$_['help_sync_button']                       = 'Синхронизировать данные';

// Additional headings/messages
$_['heading_title_order_details']            = 'Детали заказа';
$_['error_cdek_no_server_response']          = 'Не удалось получить ответ от сервера СДЭК.';
$_['error_tariff_not_defined']               = 'Тариф не определен!';
$_['error_dispatch_not_found']               = 'Отправление #%s не найдено!';
$_['error_receipt_load_failed']              = 'Не удалось загрузить квитанцию.';
$_['error_receipt_load_retry']               = 'Не удалось загрузить квитанцию, попробуйте ещё!';
$_['error_order_not_found_in_cdek']          = 'Заказ #%s не найден в базе СДЭК!';
$_['error_order_shipped_incorrect']          = 'Заказ #%s отгружен некорректно!';
$_['error_package_item_list_empty']          = 'Список вложений пуст';

// Log messages
$_['log_status_rules_not_set']               = 'Не заданы правила соответствия статусов';
$_['log_cdek_request_url']                 = 'СДЭК: url запроса';
$_['log_cdek_request_data']                = 'СДЭК: передаваемые данные';
$_['log_cdek_response']                    = 'СДЭК: ответ';

// Package options
$_['option_package_all_together']             = 'Все в одной упаковке';
$_['option_package_separate']                 = 'Каждый товар в отдельной упаковке';

// Missing keys for option() method
$_['heading_title_option']                   = 'Параметры модуля';
$_['text_tokens']                            = 'Токены для замены';
$_['text_token_dispatch_number']             = 'Номер отгрузки';
$_['text_token_order_id']                    = 'ID заказа';
$_['text_help_status_rule']                  = 'Правила для автоматического изменения статуса';
$_['text_none']                              = 'Не выбрано';
$_['entry_secure_password']                  = 'Безопасный пароль';
$_['entry_new_order_status_id']              = 'Статус при поступлении нового заказа';
$_['entry_shipping_methods']                 = 'Способы доставки';
$_['entry_payment_methods']                  = 'Способы оплаты';
$_['entry_new_order']                        = 'Новый заказ';
$_['entry_packing_min_weight']               = 'Минимальный вес упаковки';
$_['entry_packing_additional_weight']        = 'Дополнительный вес упаковки';
$_['entry_cod_default']                      = 'COD по умолчанию';
$_['entry_delivery_recipient_cost']          = 'Плата за доставку с получателя';
$_['entry_seller_name']                      = 'Название продавца';
$_['entry_add_service']                      = 'Дополнительные услуги';
$_['entry_replace_items']                    = 'Замена товаров';
$_['entry_replace_item_name']                = 'Название товара';
$_['entry_replace_item_cost']                = 'Стоимость товара';
$_['entry_replace_item_payment']             = 'Способ оплаты';
$_['entry_replace_item_amount']              = 'Количество';
$_['entry_use_cron']                         = 'Использовать крон';
$_['entry_currency']                         = 'Валюта';
$_['entry_currency_agreement']               = 'Согласование валюты';
$_['entry_seller_inn']                       = 'ИНН продавца';
$_['entry_seller_ownership']                 = 'Форма собственности';
$_['entry_seller_address']                   = 'Адрес продавца';
$_['column_token']                           = 'Токен';
$_['column_value']                           = 'Значение';
$_['column_cdek_status']                     = 'Статус СДЭК';
$_['column_new_status']                      = 'Новый статус';
$_['column_notify']                          = 'Уведомление';
$_['column_comment']                         = 'Комментарий';
$_['tab_additional_weight']                  = 'Упаковка';
$_['text_no']                                = 'Нет';
$_['text_yes']                               = 'Да';
$_['text_mode_product_all']                  = 'Все товары';
$_['text_mode_product_optional']             = 'Опционально';
$_['text_weight_fixed']                      = 'Фиксированный';
$_['text_weight_all']                        = 'Процент от всех товаров';
$_['text_home']                              = 'Главная';
$_['text_extension']                         = 'Расширения';
$_['heading_title_bk_main']                  = 'СДЭК Интегратор';
