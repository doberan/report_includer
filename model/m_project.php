<?
  require_once('/model/Enum.php');
  /*
    project
      - web includerウェブサイト
      - blog includerブログ
      - momo MOMOシステム
      - tchick tchick新規作成
      - manage チームサービス管理
      - meeting 月例会
      - rule 運用ルール
  */
  final class m_projects extends Enum{
    const WEB = 'web';
    const BLOG = 'blog';
    const MOMO = 'momo';
    const TCHICK = 'tchick';
    const MANAGE = 'manage';
    const MEETING = 'meeting';
    const RULE = 'rule';
  }
?>