<?php
/**
 * HD Soft Theme Functions
 */

if (!defined('ABSPATH')) {
    exit;
}

function hdsoft_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'hdsoft'),
    ));
}
add_action('after_setup_theme', 'hdsoft_setup');

function hdsoft_enqueue_scripts() {
    // Google Font: Be Vietnam Pro - hỗ trợ tiếng Việt (dấu, ký tự đặc biệt đ, ă, â, ê, ô, ơ, ư)
    wp_enqueue_style(
        'hdsoft-google-fonts',
        'https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,400&display=swap',
        array(),
        null
    );
    wp_enqueue_style('hdsoft-style', get_stylesheet_uri(), array('hdsoft-google-fonts'), '1.0.0');
    wp_enqueue_script('hdsoft-script', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
    
    wp_localize_script('hdsoft-script', 'themeTranslations', array(
        'ja' => array(
            'home' => 'ホーム',
            'services' => 'サービス',
            'products' => '製品',
            'achievements' => '実績',
            'about' => '会社概要',
            'contact' => 'お問い合わせ',
            'hero_title' => '次世代のソフトウェアソリューション',
            'hero_subtitle' => '革新的な技術でビジネスの成長を加速',
            'hero_cta' => 'お問い合わせ',
            'hero_cta_2' => '詳しく見る',
            'services_title' => '私たちのサービス',
            'services_subtitle' => '日本・ベトナム両市場に届けるソリューション',
            'service_1_title' => 'システム・アプリ開発',
            'service_1_desc' => '業務に最適化したシステムとアプリケーションの開発。Web、モバイル、デスクトップに対応。',
            'service_2_title' => '業務自動化ソリューション',
            'service_2_desc' => '製造業をはじめ、業務プロセスの効率化と自動化を実現。人手作業の削減、品質向上を支援。',
            'service_3_title' => 'IT総合コンサルティング',
            'service_3_desc' => 'テクノロジー戦略からシステム選定、導入支援まで。お客様の課題に合わせたワンストップ支援。',
            'service_1_tech1' => 'Webアプリケーション開発',
            'service_1_tech2' => 'モバイルアプリ開発',
            'service_1_tech3' => '業務システム構築',
            'service_2_tech1' => '製造業向けソリューション',
            'service_2_tech2' => '業務プロセス自動化',
            'service_2_tech3' => '在庫・生産管理システム',
            'service_3_tech1' => 'IT戦略・DXコンサルティング',
            'service_3_tech2' => 'システム選定・導入支援',
            'service_3_tech3' => '継続的な改善サポート',
            'service_4_title' => 'オフショア開発',
            'service_4_desc' => 'ベトナムの開発チームを活用したオフショア開発。コスト効率と品質を両立し、スケーラブルな開発体制を提供。',
            'service_4_tech1' => 'オフショア開発チーム構築',
            'service_4_tech2' => 'リモート開発・協業',
            'service_4_tech3' => '専任チーム・アウトソーシング',
            'services_cta' => 'プロジェクトについて相談しませんか？',
            'achievements_title' => '実績紹介',
            'achievements_subtitle' => '成功したプロジェクトの一部をご紹介',
            'achievement_1_title' => '企業サイト・業務システム開発',
            'achievement_1_desc' => '複数の事業部門向けにコーポレートサイトと社内ツール（問い合わせ管理、予約、在庫連携）を提供。Azure AD連携とCI/CDによる安定したリリース体制を構築しました。',
            'achievement_2_title' => '求人マッチングシステム開発',
            'achievement_2_desc' => '求職者と採用企業をつなぐWebアプリ。スキル・条件マッチング、応募フロー、管理ダッシュボードを実装。リリース時点で約50社が利用を開始しました。',
            'achievement_3_title' => '外部機材管理システム',
            'achievement_3_desc' => '放送用カメラ・音声機材・中継車両の在籍・貸出・メンテナンスを一元管理。機材の稼働率向上とスケジュール最適化を実現しました。',
            'achievement_4_title' => '医療システム開発',
            'achievement_4_desc' => '医療画像の表示・解析と患者データ連携を実現。DICOM対応により複数施設で画像の共有・参照が可能になりました。',
            'about_title' => '私たちについて',
            'about_subtitle' => '日本の価値観を日本・ベトナム両市場へ — お客様の成功に貢献する',
            'about_desc_1' => 'HD Softは2026年にベトナムで創業したソフトウェア開発会社です。創業者は日本で10年以上にわたりシステムプロバイダーとしてキャリアを積み、日本の厳格な品質基準と顧客第一の価値観を体得してきました。',
            'about_desc_2' => '私たちは、日本で培った経験と価値観を日本・ベトナム両市場に届け、お客様のビジネス成功に貢献することを使命としています。品質、誠実さ、そして継続的な改善—これらは私たちの根幹をなす価値です。',
            'stat_1_number' => '10年+',
            'stat_1_label' => '日本での実務経験',
            'stat_2_number' => '2026',
            'stat_2_label' => 'ベトナム創業',
            'stat_3_number' => '品質',
            'stat_3_label' => '日本基準の品質管理',
            'stat_4_number' => '🇯🇵 & 🇻🇳',
            'stat_4_label' => '日本・ベトナム両市場',
            'contact_title' => 'お問い合わせ',
            'contact_subtitle' => 'プロジェクトについてお気軽にご相談ください',
            'form_name' => 'お名前',
            'form_email' => 'メールアドレス',
            'form_subject' => '件名',
            'form_message' => 'メッセージ',
            'form_submit' => '送信',
            'info_email_title' => 'メール',
            'info_email_value' => 'info@hdsoft.com',
            'info_phone_title' => '電話',
            'info_phone_value' => '+84 866 519 359',
            'info_address_title' => '所在地',
            'info_address_value' => '大阪市浪速区難波中３-14-5 新日本難波ビル ２階 ２０号室',
            'footer_about_title' => '会社概要',
            'footer_about_text' => '革新的なソフトウェアソリューションを提供する開発会社です。',
            'footer_services_title' => 'サービス',
            'footer_company_title' => '会社情報',
            'footer_copyright' => '© 2026 HD Soft. All rights reserved.',
            'about_mission_title' => '私たちのストーリー',
            'about_desc_3' => '日本とベトナムの両市場において、日本品質のシステムソリューションを提供することで、お客様のデジタルトランスフォーメーションを支援し、持続的な成長を実現します。',
            'about_vision_title' => '🎯 ビジョン',
            'about_vision_desc' => '日本で磨いた技術と姿勢で、日本・ベトナムの企業がデジタル時代に成功できるよう支援する。',
            'about_values_title' => '💡 私たちの強み',
            'about_values_desc' => '日本市場で10年以上の実績、厳格な品質管理、顧客との密接な連携、そして継続的な改善の文化。',
            'about_stats_title' => '私たちの基盤',
            'about_tech_title' => '技術スタック',
            'about_tech_frontend' => 'フロントエンド',
            'about_tech_backend' => 'バックエンド',
            'about_tech_mobile' => 'モバイル',
            'about_tech_database' => 'データベース',
            'about_tech_cloud' => 'クラウド & DevOps',
            'about_tech_ai' => 'AI & データサイエンス',
            'testimonials_title' => 'クライアントの声',
            'testimonial_1_text' => '"HD Softのチームは、私たちのビジョンを完璧に理解し、期待を超える成果を出してくれました。プロジェクトは予定通りに完了し、ROIは素晴らしいものでした。"',
            'testimonial_1_author' => '田中太郎 - CEO, Tech Solutions Inc.',
            'testimonial_2_text' => '"Đội ngũ chuyên nghiệp, giải pháp sáng tạo và hỗ trợ tận tình. Dự án của chúng tôi đã thành công vượt mong đợi nhờ sự hợp tác với HD Soft."',
            'testimonial_2_author' => 'Nguyễn Văn A - CTO, Digital Innovations Vietnam',
            'form_success_message' => 'お問い合わせありがとうございます。できるだけ早くご返信いたします。',
            'form_error_message' => '送信中にエラーが発生しました。もう一度お試しください。',
            'products_title' => '私たちの製品',
            'products_subtitle' => '利便性とスマートさを追求したSaaSを開発中',
            'products_dev_title' => '開発中です',
            'products_dev_desc' => '私たちの製品は現在開発中です。お客様の業務をより便利に、よりスマートにするSaaSを目指して取り組んでいます。',
            'products_dev_aim' => '便利でスマートなSaaS — ご期待ください。',
            'products_cta' => '先行情報をご希望の方は',
            'products_cta_desc' => 'リリース情報や先行案内をご希望の方はお気軽にお問い合わせください。',
            'family_portal_title' => 'Family Portal – 氏族ポータル（家系情報の門）',
            'family_portal_tagline' => '氏族・家系のSaaSポータル。各氏族向けの情報管理・公開プラットフォームです。',
            'family_portal_feature_1' => '<strong>公開ポータル：</strong>氏族のホーム、紹介、歴史、規約、ニュース、イベントを氏族ごとに掲載。',
            'family_portal_feature_2' => '<strong>家系図（Family Tree）：</strong>メンバー管理、父母・配偶関係、世代。ズーム・パン・プロフィール表示付きのインタラクティブな家系図。',
            'family_portal_feature_3' => '<strong>マルチテナント：</strong>1つのプラットフォームで複数氏族を提供。氏族ごとにデータを分離し、役割（管理/編集/閲覧）で権限を付与。',
            'family_portal_feature_4' => '<strong>料金プラン：</strong>無料プラン（メンバー数制限あり）と有料プラン（無制限）。',
            // Offshore Development Page
            'offshore_hero_title' => 'AI-Readyなベトナム開発チームで',
            'offshore_hero_subtitle' => '日本のIT人材不足を解決する',
            'offshore_hero_cta' => '無料で相談する',
            'offshore_problem_title' => '日本のIT課題',
            'offshore_problem_desc' => '深刻化するIT人材不足。開発リソースの確保、コスト高騰、そしてスピードの遅延に悩んでいませんか？',
            'offshore_problem_1' => '優秀なエンジニアが採用できない',
            'offshore_problem_2' => '開発コストが想定を超えてしまう',
            'offshore_problem_3' => '新しい技術（AIなど）に対応できる人材がいない',
            'offshore_solution_title' => '私たちの解決策',
            'offshore_solution_subtitle' => 'ベトナムのAI-Readyなエンジニアチームが、貴社の開発を強力にサポートします。',
            'offshore_solution_1_title' => 'AI-Ready人材',
            'offshore_solution_1_desc' => '最新のAI技術（ChatGPT, Copilot等）を使いこなし、圧倒的な生産性で開発を行うエンジニアチーム。',
            'offshore_solution_2_title' => '日本品質のマネジメント',
            'offshore_solution_2_desc' => '日本での開発経験・マネジメント経験が豊富なブリッジSEが、品質とコミュニケーションを担保します。',
            'offshore_solution_3_title' => '柔軟な体制構築',
            'offshore_solution_3_desc' => 'ラボ型（専属チーム）から受託開発まで、プロジェクトのフェーズに合わせた最適な体制を提案。',
            'offshore_benefits_title' => '導入のメリット',
            'offshore_benefit_1' => '開発コストを最大40%削減',
            'offshore_benefit_2' => 'AI活用による開発スピードの向上',
            'offshore_benefit_3' => '日本語でのスムーズなコミュニケーション',
            'offshore_cta_title' => 'まずはご相談ください',
            'offshore_cta_desc' => '貴社の課題に合わせた最適なチーム構成と見積もりを提案いたします。',
        ),
        'vi' => array(
            'home' => 'Trang chủ',
            'services' => 'Dịch vụ',
            'products' => 'Sản phẩm',
            'achievements' => 'Thành tựu',
            'about' => 'Về chúng tôi',
            'contact' => 'Liên hệ',
            'hero_title' => 'Giải pháp phần mềm thế hệ mới',
            'hero_subtitle' => 'Tăng tốc tăng trưởng doanh nghiệp với công nghệ đổi mới',
            'hero_cta' => 'Liên hệ ngay',
            'hero_cta_2' => 'Tìm hiểu thêm',
            'services_title' => 'Dịch vụ của chúng tôi',
            'services_subtitle' => 'Giải pháp đến hai thị trường Nhật Bản & Việt Nam',
            'service_1_title' => 'Phát triển hệ thống & ứng dụng',
            'service_1_desc' => 'Phát triển hệ thống và ứng dụng tối ưu cho nghiệp vụ. Hỗ trợ Web, di động và desktop.',
            'service_2_title' => 'Giải pháp tự động hóa nghiệp vụ',
            'service_2_desc' => 'Đặc biệt trong lĩnh vực sản xuất, tối ưu hóa và tự động hóa quy trình nghiệp vụ. Giảm thao tác thủ công, nâng cao chất lượng.',
            'service_3_title' => 'Tư vấn CNTT tổng thể',
            'service_3_desc' => 'Từ chiến lược công nghệ đến lựa chọn hệ thống và hỗ trợ triển khai. Hỗ trợ một cửa theo nhu cầu của khách hàng.',
            'service_1_tech1' => 'Phát triển ứng dụng Web',
            'service_1_tech2' => 'Phát triển ứng dụng di động',
            'service_1_tech3' => 'Xây dựng hệ thống nghiệp vụ',
            'service_2_tech1' => 'Giải pháp cho ngành sản xuất',
            'service_2_tech2' => 'Tự động hóa quy trình nghiệp vụ',
            'service_2_tech3' => 'Hệ thống quản lý tồn kho & sản xuất',
            'service_3_tech1' => 'Tư vấn chiến lược IT & DX',
            'service_3_tech2' => 'Lựa chọn và triển khai hệ thống',
            'service_3_tech3' => 'Hỗ trợ cải tiến liên tục',
            'service_4_title' => 'Offshore Development',
            'service_4_desc' => 'Phát triển offshore với đội ngũ tại Việt Nam. Cân bằng chi phí và chất lượng, cung cấp mô hình phát triển có thể mở rộng.',
            'service_4_tech1' => 'Xây dựng đội ngũ offshore',
            'service_4_tech2' => 'Phát triển & hợp tác từ xa',
            'service_4_tech3' => 'Đội ngũ chuyên trách & outsourcing',
            'services_cta' => 'Bạn muốn tư vấn về dự án?',
            'achievements_title' => 'Thành tựu của chúng tôi',
            'achievements_subtitle' => 'Một số dự án thành công',
            'achievement_1_title' => 'Phát triển trang web doanh nghiệp & hệ thống nghiệp vụ',
            'achievement_1_desc' => 'Cung cấp trang web doanh nghiệp và công cụ nội bộ (quản lý liên hệ, đặt chỗ, tích hợp tồn kho) cho nhiều đơn vị kinh doanh. Tích hợp Azure AD và triển khai ổn định qua CI/CD.',
            'achievement_2_title' => 'Phát triển hệ thống ghép nối việc làm',
            'achievement_2_desc' => 'Ứng dụng web kết nối người tìm việc và nhà tuyển dụng: ghép nối theo kỹ năng/điều kiện, quy trình ứng tuyển, bảng điều khiển quản lý. Khoảng 50 công ty sử dụng tại thời điểm ra mắt.',
            'achievement_3_title' => 'Hệ thống quản lý thiết bị bên ngoài',
            'achievement_3_desc' => 'Quản lý tập trung máy quay, thiết bị âm thanh và xe truyền hình: hiện trạng, cho mượn, bảo trì. Cải thiện tỷ lệ sử dụng thiết bị và tối ưu lịch trình.',
            'achievement_4_title' => 'Phát triển hệ thống y tế',
            'achievement_4_desc' => 'Hiển thị và phân tích hình ảnh y tế, tích hợp dữ liệu bệnh nhân. Hỗ trợ DICOM cho phép chia sẻ và tra cứu hình ảnh giữa nhiều cơ sở y tế.',
            'about_title' => 'Về chúng tôi',
            'about_subtitle' => 'Giá trị Nhật Bản đến thị trường Nhật Bản & Việt Nam — Đồng hành thành công cùng khách hàng',
            'about_desc_1' => 'HD Soft là công ty phát triển phần mềm được thành lập tại Việt Nam vào năm 2026. Người sáng lập có hơn 10 năm kinh nghiệm làm nhà cung cấp hệ thống tại Nhật Bản, nắm vững tiêu chuẩn chất lượng nghiêm ngặt và giá trị lấy khách hàng làm trung tâm của thị trường Nhật.',
            'about_desc_2' => 'Chúng tôi mang kinh nghiệm và giá trị tích lũy từ Nhật Bản đến cả hai thị trường Nhật Bản và Việt Nam, với sứ mệnh đóng góp vào thành công của khách hàng. Chất lượng, chính trực và cải tiến liên tục — đây là những giá trị cốt lõi của chúng tôi.',
            'stat_1_number' => '10 năm+',
            'stat_1_label' => 'Kinh nghiệm tại Nhật Bản',
            'stat_2_number' => '2026',
            'stat_2_label' => 'Thành lập tại Việt Nam',
            'stat_3_number' => 'Chất lượng',
            'stat_3_label' => 'Quản lý chất lượng chuẩn Nhật',
            'stat_4_number' => '🇯🇵 & 🇻🇳',
            'stat_4_label' => 'Hai thị trường Nhật Bản & Việt Nam',
            'contact_title' => 'Liên hệ',
            'contact_subtitle' => 'Liên hệ với chúng tôi về dự án của bạn',
            'form_name' => 'Họ và tên',
            'form_email' => 'Email',
            'form_subject' => 'Chủ đề',
            'form_message' => 'Tin nhắn',
            'form_submit' => 'Gửi',
            'info_email_title' => 'Email',
            'info_email_value' => 'info@hdsoft.io.vn',
            'info_phone_title' => 'Điện thoại',
            'info_phone_value' => '0866 519 359',
            'info_address_title' => 'Địa chỉ',
            'info_address_value' => 'E2-11-23 KDT Nam Vĩnh Yên, Vĩnh Phúc, Phú Thọ',
            'footer_about_title' => 'Về công ty',
            'footer_about_text' => 'Công ty phát triển phần mềm cung cấp giải pháp đổi mới.',
            'footer_services_title' => 'Dịch vụ',
            'footer_company_title' => 'Thông tin công ty',
            'footer_copyright' => '© 2026 HD Soft. Tất cả quyền được bảo lưu.',
            'about_mission_title' => 'Câu chuyện của chúng tôi',
            'about_desc_3' => 'Tại cả hai thị trường Nhật Bản và Việt Nam, chúng tôi cung cấp giải pháp hệ thống đạt chuẩn Nhật Bản, hỗ trợ chuyển đổi số và thúc đẩy tăng trưởng bền vững cho khách hàng.',
            'about_vision_title' => '🎯 Tầm nhìn',
            'about_vision_desc' => 'Với kỹ năng và thái độ được rèn giũa tại Nhật Bản, hỗ trợ doanh nghiệp Nhật Bản và Việt Nam thành công trong thời đại số.',
            'about_values_title' => '💡 Thế mạnh của chúng tôi',
            'about_values_desc' => 'Hơn 10 năm kinh nghiệm thị trường Nhật Bản, quản lý chất lượng nghiêm ngặt, hợp tác chặt chẽ với khách hàng và văn hóa cải tiến liên tục.',
            'about_stats_title' => 'Nền tảng của chúng tôi',
            'about_tech_title' => 'Công nghệ sử dụng',
            'about_tech_frontend' => 'Frontend',
            'about_tech_backend' => 'Backend',
            'about_tech_mobile' => 'Di động',
            'about_tech_database' => 'Cơ sở dữ liệu',
            'about_tech_cloud' => 'Cloud & DevOps',
            'about_tech_ai' => 'AI & Khoa học dữ liệu',
            'testimonials_title' => 'Ý kiến khách hàng',
            'testimonial_1_text' => '"Đội ngũ HD Soft hiểu rõ tầm nhìn của chúng tôi và mang lại kết quả vượt mong đợi. Dự án hoàn thành đúng hạn với ROI tuyệt vời."',
            'testimonial_1_author' => 'Tanaka Taro - CEO, Tech Solutions Inc.',
            'testimonial_2_text' => '"Đội ngũ chuyên nghiệp, giải pháp sáng tạo và hỗ trợ tận tình. Dự án của chúng tôi đã thành công vượt mong đợi nhờ sự hợp tác với HD Soft."',
            'testimonial_2_author' => 'Nguyễn Văn A - CTO, Digital Innovations Vietnam',
            'form_success_message' => 'Cảm ơn bạn đã liên hệ. Chúng tôi sẽ phản hồi sớm nhất có thể.',
            'form_error_message' => 'Đã xảy ra lỗi trong quá trình gửi. Vui lòng thử lại.',
            'products_title' => 'Sản phẩm của chúng tôi',
            'products_subtitle' => 'SaaS tiện lợi và thông minh đang phát triển',
            'products_dev_title' => 'Đang phát triển',
            'products_dev_desc' => 'Sản phẩm của chúng tôi đang trong quá trình phát triển. Chúng tôi hướng đến xây dựng các SaaS tiện lợi và thông minh cho nghiệp vụ của khách hàng.',
            'products_dev_aim' => 'SaaS tiện lợi và thông minh — Hãy cùng chờ đón.',
            'products_cta' => 'Bạn muốn nhận thông tin sớm?',
            'products_cta_desc' => 'Liên hệ với chúng tôi nếu bạn muốn nhận thông tin ra mắt hoặc ưu đãi sớm.',
            'family_portal_title' => 'Family Portal – Cổng thông tin gia tộc',
            'family_portal_tagline' => 'Hệ thống SaaS cổng thông tin gia tộc / gia phả — nền tảng quản lý và công bố thông tin cho từng dòng họ.',
            'family_portal_feature_1' => '<strong>Portal công khai:</strong> Trang chủ gia tộc, giới thiệu, lịch sử, quy định, tin tức và sự kiện theo từng họ.',
            'family_portal_feature_2' => '<strong>Gia phả (Family Tree):</strong> Quản lý thành viên, quan hệ cha/mẹ/vợ chồng, thế hệ; cây gia phả tương tác (zoom, pan, xem hồ sơ).',
            'family_portal_feature_3' => '<strong>Đa tenant (multi-tenant):</strong> Một nền tảng phục vụ nhiều gia tộc; dữ liệu cách ly theo từng họ, phân quyền theo vai trò (Quản trị / Biên tập / Xem).',
            'family_portal_feature_4' => '<strong>Gói đăng ký:</strong> Gói miễn phí (giới hạn thành viên) và gói trả phí (không giới hạn).',
            // Offshore Development Page
            'offshore_hero_title' => 'Đội ngũ phát triển AI-Ready tại Việt Nam',
            'offshore_hero_subtitle' => 'Giải quyết bài toán thiếu hụt nhân sự IT cho doanh nghiệp Nhật',
            'offshore_hero_cta' => 'Nhận tư vấn miễn phí',
            'offshore_problem_title' => 'Thách thức của doanh nghiệp IT Nhật Bản',
            'offshore_problem_desc' => 'Thiếu hụt nhân sự CNTT ngày càng trầm trọng. Bạn có đang đau đầu vì khó tuyển dụng, chi phí đắt đỏ và tiến độ chậm trễ?',
            'offshore_problem_1' => 'Khó tuyển dụng kỹ sư giỏi',
            'offshore_problem_2' => 'Chi phí phát triển vượt quá ngân sách',
            'offshore_problem_3' => 'Thiếu nhân sự am hiểu công nghệ mới (như AI)',
            'offshore_solution_title' => 'Giải pháp của chúng tôi',
            'offshore_solution_subtitle' => 'Đội ngũ kỹ sư AI-Ready tại Việt Nam sẽ hỗ trợ đắc lực cho việc phát triển của doanh nghiệp bạn.',
            'offshore_solution_1_title' => 'Nhân sự AI-Ready',
            'offshore_solution_1_desc' => 'Đội ngũ kỹ sư ứng dụng thành thạo tiến bộ AI (ChatGPT, Copilot, v.v.) mang lại năng suất phát triển vượt trội.',
            'offshore_solution_2_title' => 'Quản lý chuẩn Nhật',
            'offshore_solution_2_desc' => 'Kỹ sư cầu nối (BrSE) với kinh nghiệm quản lý và phát triển trực tiếp tại Nhật Bản, đảm bảo chất lượng và giao tiếp thông suốt.',
            'offshore_solution_3_title' => 'Mô hình linh hoạt',
            'offshore_solution_3_desc' => 'Từ mô hình Lab (đội ngũ chuyên trách) đến phát triển trọn gói, chúng tôi đề xuất cơ cấu tối ưu nhất theo từng giai đoạn dự án.',
            'offshore_benefits_title' => 'Lợi ích mang lại',
            'offshore_benefit_1' => 'Tiết kiệm đến 40% chi phí phát triển',
            'offshore_benefit_2' => 'Đẩy nhanh tốc độ nhờ ứng dụng AI',
            'offshore_benefit_3' => 'Giao tiếp mượt mà bằng tiếng Nhật',
            'offshore_cta_title' => 'Hãy liên hệ với chúng tôi',
            'offshore_cta_desc' => 'Chúng tôi sẽ tư vấn cơ cấu đội ngũ và báo giá phù hợp nhất với bài toán của bạn.',
        )
    ));
}
add_action('wp_enqueue_scripts', 'hdsoft_enqueue_scripts');

function handle_contact_form() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_form'])) {
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $subject = sanitize_text_field($_POST['subject']);
        $message = sanitize_textarea_field($_POST['message']);
        
        $to = get_option('admin_email');
        $headers = array('Content-Type: text/html; charset=UTF-8', 'From: ' . $name . ' <' . $email . '>');
        
        $email_subject = 'Contact Form: ' . $subject;
        $email_body = '<html><body>';
        $email_body .= '<h2>New Contact Form Submission</h2>';
        $email_body .= '<p><strong>Name:</strong> ' . $name . '</p>';
        $email_body .= '<p><strong>Email:</strong> ' . $email . '</p>';
        $email_body .= '<p><strong>Subject:</strong> ' . $subject . '</p>';
        $email_body .= '<p><strong>Message:</strong></p>';
        $email_body .= '<p>' . nl2br($message) . '</p>';
        $email_body .= '</body></html>';
        
        if (wp_mail($to, $email_subject, $email_body, $headers)) {
            return 'success';
        } else {
            return 'error';
        }
    }
    return null;
}
