<h1>�ڽ�����foreach�û��б��ʹ��</h1>
<h1>ȡ����ͨ����������</h1>
<{foreach from=$arr1 item=temp}>
<{$temp}>
<{/foreach}>
<h1>ȡ����ͨ�Ĺ�������</h1>
<{foreach from=$arr2 item=temp key=city}>
<{$city}>=<{$temp}>
<{/foreach}>
<h1>ȡ����ά��������</h1>
<{foreach from=$arr3 item=temp}>
<{*temp��һά���� *}>
<{foreach from=$temp item=person}>
<{$person}>
<{/foreach}>
<{/foreach}>
<h1>ȡ����ά��������</h1>
<{foreach from=$arr4 item=item1}>
<{*����ѭ��*}>
<{foreach from=$item1 item=item2 key=k}>
<{$k}>=<{$item2}>
<{/foreach}>
<br/>
<{/foreach}>
<h1>if else���԰���</h1>
<{if $pagenow>10 }>
pagenow>10
<{else}>
pagenow<=10
<{/if}>