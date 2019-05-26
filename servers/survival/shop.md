---
layout: default
title: Shop
markdown: true
---
<div class="alert alert-danger" role="alert">
  このプラグインは削除予定であるため非推奨です。推奨の<a href="{{site.github.url}}/servers/survival/quickshop.html">QuickShop</a>を利用して下さい。
</div>

# Shopとは？

ShopはSurvivalに導入されているプラグインの一つです。
この機能を使うことによりプレイヤー間でゲーム内通貨を利用したアイテム取引が可能になります。
価格はプレイヤーが自由に決めることができ、アイテムの販売・買取が行えます。

## コマンドリスト

<div class="table-responsive">
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th style="width: 250px;">コマンド</th>
        <th>説明</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>/shop</td>
        <td>ショップの管理GUIを開く。</td>
      </tr>
    </tbody>
  </table>
</div>

# ショップの作成方法

1.チェストを設置し、チェストに看板を設置する。
看板に`[shop]`、`個数`、`値段`、`buy`もしくは`sell`を入力する。
<img src="/assets/img/Shop_1.png" class="img-responsive">

## ショップの削除

ショップの看板を破壊することでショップを削除できます。