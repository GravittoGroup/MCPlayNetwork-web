---
layout: default
title: Survival
markdown: true
---
# Survival
SurvivalはMCPlayNetworkでプレイできるサブサーバーの１つです。  
このサーバーはバニラのMInecraftを基盤に、様々なプレイヤーが楽しめるようにカスタマイズされています。その中でプレイヤーが各々自由に目標を持ってプレイすることができます。巨大建築をするも、追加された独自要素を楽しみ尽くすもプレイヤー次第です。  

## ワールド
Survivalにはプレイヤーが自由に移動できるワールドが4種類存在しています。
- ホームワールド
- 資源ワールド
  - オーバーワールド
  - ネザー
  - ジ・エンド

各ワールドには`/warp`コマンドから開くGUIで移動することが可能です。  
なお、移動にはクールダウンが設定されており、移動するたびにワールドのランダムな地点へテレポートされます。

**ホームワールド**  
プレイヤーが一番最初に訪れるワールドであり、保護が唯一有効になっているワールドです。建築をする場合は基本的にこのワールドを利用することになります。  
このワールドは自動定期リセットは無いため、建築やアイテムが消えることはありません。

**資源ワールド**  
資源ワールドはあらゆるブロックの破壊が可能になっており、保護が有効になっていないワールドです。資源を採取したりする場合はこのワールドを利用して下さい。  
このワールドは毎月1日に自動リセットが行われます。その際に建築やアイテムなどは一切消えるため、建築やアイテムの保管は推奨していません。 

## コマンド
{% include survival_commands.html %}

# Survivalに関する解説ページ
<div class="row wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
  <div class="col-lg-4 col-md-12 mb-4">
    <div class="card">
      <div class="view overlay">
        <img class="card-img-top" src="{{site.github.url}}/assets/img/QuickShop.png"
          alt="QuickShop">
        <a href="{{site.github.url}}/servers/Survival/quickshop">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
      <div class="card-body">
        <h4 class="card-title">QuickShop</h4>
        <p class="card-text">ユーザー間でアイテムを取引するためのショップを作成できます。</p>
        <a href="{{site.github.url}}/servers/Survival/quickshop" class="btn btn-primary">解説</a>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-12 mb-4">
    <div class="card">
      <div class="view overlay">
        <img class="card-img-top" src="{{site.github.url}}/assets/img/Shop.png"
          alt="Shop">
        <a href="{{site.github.url}}/servers/Survival/shop">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
      <div class="card-body">
        <h4 class="card-title">Shop</h4>
        <p class="card-text"><b>非推奨：</b>ユーザー間でアイテムを取引するためのショップを作成できます。</p>
        <a href="{{site.github.url}}/servers/Survival/shop" class="btn btn-primary">解説</a>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-12 mb-4">
    <div class="card">
      <div class="view overlay">
        <img class="card-img-top" src="{{site.github.url}}/assets/img/mcMMO.png"
          alt="mcMMO">
        <a href="{{site.github.url}}/servers/Survival/mcMMO/">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
      <div class="card-body">
        <h4 class="card-title">mcMMO</h4>
        <p class="card-text">プレイヤーにスキルとアビリティが追加されます。</p>
        <a href="{{site.github.url}}/servers/Survival/mcMMO/" class="btn btn-primary">解説</a>
      </div>
    </div>
  </div>
</div>
<div class="row wow fadeIn">
  <div class="col-lg-4 col-md-12 mb-4">
    <div class="card">
      <div class="view overlay">
        <img class="card-img-top" src="{{site.github.url}}/assets/img/GriefPrevention.png"
          alt="GriefPrevention">
        <a href="{{site.github.url}}/servers/Survival/griefprevention">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
      <div class="card-body">
        <h4 class="card-title">GriefPrevention</h4>
        <p class="card-text">指定範囲を保護し、他のプレイヤーから守ります。</p>
        <a href="{{site.github.url}}/servers/Survival/griefprevention" class="btn btn-primary">解説</a>
      </div>
    </div>
  </div>
</div>