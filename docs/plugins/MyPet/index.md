# MyPet
Mobをプレイヤーのペットとして飼う事ができます。
ペットには様々なスキルがあり、スキルを利用して効率よく敵Mobを倒す事ができます。

## 捕まえる方法
捕まえる条件を満たした状態で、リードでMobを殴ることでペットにすることができます。

## 捕まえる条件

!!! Info
    記載される条件のほか、Mob別に確立設定がされています。

|       Mob       |                    条件                     |
| --------------- | ------------------------------------------- |
| Bat             | 体力10%未満                                 |
| Bee             | 体力10%未満、Herbalism>100                  |
| Blaze           | 体力10%未満、Swords>80、Archery>80、Axes>80 |
| Cat             | Tamed、Taming>70                            |
| CaveSpider      | 体力10%未満、Mining>150                     |
| Chicken         | 体力10%未満                                 |
| Cod             | 体力10%未満                                 |
| Cow             | 体力10%未満                                 |
| Creeper         | 体力10%未満                                 |
| Dolphin         | 体力10%未満、Fishing>300                    |
| Donkey          | Tamed、Taming>50                            |
| Drowned         | 体力10%未満                                 |
| ElderGuardian   | 体力10%未満、Alchemy>100                    |
| Enderman        | 体力10%未満、Acrobatics>300                 |
| Endermite       | 体力10%未満、Acrobatics>500                 |
| EnderDragon     | 不可                                        |
| Evoker          | 体力10%未満、Alchemy>100                    |
| Fox             | 体力10%未満、Taming>800                     |
| Ghast           | 不可                                        |
| Giant           | 不可                                        |
| Guardian        | 体力10%未満、Fishing>50                     |
| Horse           | Tamed、Taming>30                            |
| Husk            | 体力10%未満                                 |
| Illusioner      | 不可                                        |
| IronGolem       | 作成、Taming>50                             |
| Llama           | Tamed、Taming>30                            |
| MagmaCube       | 体力10%未満、サイズ=2                       |
| Mooshroom       | 体力10%未満                                 |
| Mule            | Tamed、Taming>50                            |
| Ocelot          | 体力10%未満                                 |
| Panda           | 体力10%未満、Unarmed>100                    |
| Parrot          | Tamed、Taming>20                            |
| Phantom         | 体力10%未満、Archery>100                    |
| Pig             | 体力10%未満                                 |
| PigZombie       | 体力10%未満、Swords>200                     |
| Pillager        | 体力10%未満、Axes>200                       |
| PolarBear       | 体力10%未満、Unarmed>100                    |
| PufferFish      | 体力10%未満                                 |
| Rabbit          | 体力10%未満                                 |
| Ravanger        | 体力10%未満、Unarmed>100、Swords>100        |
| Salmon          | 体力10%未満                                 |
| Sheep           | 体力10%未満                                 |
| Silverfish      | 体力10%未満                                 |
| Skeleton        | 体力10%未満                                 |
| SkeltonHorse    | 不可                                        |
| Slime           | 体力10%未満、サイズ=2                       |
| Snowman         | 体力10%未満                                 |
| Spider          | 体力10%未満                                 |
| Squid           | 体力10%未満、Fishing>50                     |
| Stray           | 体力10%未満                                 |
| TraderLlama     | Tamed、Taming>50                            |
| TropicalFish    | 体力10%未満                                 |
| Turtle          | 体力10%未満                                 |
| Vex             | 体力10%未満、Swords>100                     |
| Villager        | 体力10%未満                                 |
| Vindicator      | 体力10%未満、Alchemy>100                    |
| WanderingTrader | 体力10%未満                                 |
| Witch           | 体力10%未満、Alchemy>30                     |
| WitherSkeleton  | 体力10%未満、Swords>250                     |
| Wolf            | Tamed                                       |
| Zombie          | 体力10%未満                                 |
| ZombieHorse     | 不可                                        |
| ZombieVillager  | 体力10%未満                                 |

## スキルツリー
ペットは捕まえた段階でランダムに１つのスキルツリーが決定されます。スキルツリーにはそれぞれ独自性があり、それぞれ異なったスキルを習得します。
スキルツリーを変更することは不可能です。

## 満腹度
ペットには満腹度があり、満腹度が減少することで体力やデバフがペットに発生します。
解消するには`/petinfo`で表示される食べ物を右クリックで与える必要があります。

## 行動
ペットの行動を選ぶことができます。
`/petbehavior`でペットの行動を変更できます。

## ペットのリスポーン
ペットが死亡した場合、時間が経過するのを待つか、ゲーム内通貨を支払い即座にリスポーンさせる方法があります。
ゲーム内通貨を払う場合、`/petrespawn`で支払い金額を確認でき`/petrespawn pay`で支払う事ができます。

## デスペナルティ
ペットは死亡するたびにデスペナルティとして経験値を失います。
経験値を失うことによりレベルが下がる場合ペットのレベルは下がります。

## ペットを逃がす
ペットを逃がしたい場合`/petrelease`を入力後チャットに表示されたペット名をクリックすることでペットを逃がすことができます。